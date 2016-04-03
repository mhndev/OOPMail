<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:28 PM
 */

namespace mhndev\OOPMail\Protocol;

use iCommand;
use mhndev\OOPMail\Exceptions\RuntimeException;
use mhndev\OOPMail\Interfaces\iProtocol;

/**
 * Provides low-level methods for concrete adapters to communicate with
 * a remote mail server and track requests and responses.
 */

abstract class AbstractProtocol implements iProtocol
{

    /**
     * Mail default EOL string
     */
    const EOL = "\r\n";

    /**
     * Default timeout in seconds for initiating session
     */
    const TIMEOUT_CONNECTION = 30;

    /**
     * Hostname or IP address of remote server
     * @var string
     */
    protected $host;

    /**
     * Port number of connection
     * @var int
     */
    protected $port;

    /**
     * @var string request
     */
    protected $request;

    /**
     * Array of server responses to last request
     * @var array
     */
    protected $response;

    /**
     * Socket connection resource
     * @var resource
     */
    protected $socket;

    /**
     * @var array of supporting commands
     */
    protected $commands;

    /**
     * @var array of executed commands
     */
    protected $executed;

    /**
     * AbstractProtocol constructor.
     * @param string $host
     * @param null $port
     */
    public function __construct($host = '127.0.0.1', $port = null)
    {
        $this->host = $host;
        $this->port = $port;
    }

    /**
     * Class destructor to cleanup open resources
     * php garbage collector does'nt release resources
     */
    public function __destruct()
    {
        $this->_disconnect();
    }

    /**
     * Disconnect from remote host and free resource
     *
     */
    protected function _disconnect()
    {
        if (is_resource($this->socket)) {
            fclose($this->socket);
        }
    }

    /**
     * Connect to the server using the supplied transport and target
     * An example $remote string may be 'tcp://mail.example.com:25' or 'ssh://hostname.com:2222'
     *
     * @param  string $remote Remote
     * @throws RuntimeException
     * @return bool
     */
    protected function _connect($remote)
    {
        $errorNum = 0;
        $errorStr = '';

        $this->socket = @stream_socket_client($remote, $errorNum, $errorStr, self::TIMEOUT_CONNECTION);

        if ($this->socket === false) {
            if ($errorNum == 0)
                $errorStr = 'Could not open socket';
            throw new RuntimeException($errorStr);
        }

        if (($result = stream_set_timeout($this->socket, self::TIMEOUT_CONNECTION)) === false)
            throw new RuntimeException('Could not set stream timeout');

        return $result;
    }


    /**
     * Send the given request followed by a LINE END to the server.
     *
     * @param  string $request
     * @throws RuntimeException
     * @return int|bool Number of bytes written to remote host
     */
    protected function _send($request)
    {
        if (!is_resource($this->socket)) {
            throw new RuntimeException('No connection has been established to ' . $this->host);
        }

        $this->request = $request;

        $result = fwrite($this->socket, $request . self::EOL);

        if ($result === false) {
            throw new RuntimeException('Could not send request to ' . $this->host);
        }

        return $result;
    }

    /**
     * Parse server response for successful codes
     *
     * Read the response from the stream and check for expected return code.
     * Throws a \mhndev\OOPMail\Exceptions\RuntimeException if an unexpected code is returned.
     *
     * @param  string|array $code One or more codes that indicate a successful response
     * @param  int $timeout Per-request timeout value if applicable
     * @throws RuntimeException
     * @return string Last line of response string
     */
    protected function _expect($code, $timeout = null)
    {
        $this->response = [];
        $errMsg = '';

        if (!is_array($code)) {
            $code = [$code];
        }

        do {
            $this->response[] = $result = $this->_receive($timeout);
            list($cmd, $more, $msg) = preg_split('/([\s-]+)/', $result, 2, PREG_SPLIT_DELIM_CAPTURE);

            if ($errMsg !== '') {
                $errMsg .= ' ' . $msg;
            } elseif ($cmd === null || !in_array($cmd, $code)) {
                $errMsg =  $msg;
            }
        } while (strpos($more, '-') === 0); // The '-' message prefix indicates an information string instead of a response string.

        if ($errMsg !== '') {
            throw new RuntimeException($errMsg);
        }

        return $msg;
    }


    /**
     * Get a line from the stream.
     *
     * @param  int $timeout Per-request timeout value if applicable
     * @return string
     * @throws RuntimeException
     */
    protected function _receive($timeout = null)
    {
        if (!is_resource($this->socket)) {
            throw new RuntimeException('No connection has been established to ' . $this->host);
        }

        // Adapters may wish to supply per-commend timeouts according to appropriate RFC
        if ($timeout !== null) {
            stream_set_timeout($this->socket, $timeout);
        }

        // Retrieve response
        $response = fgets($this->socket, 1024);

        // Check meta data to ensure connection is still valid
        $info = stream_get_meta_data($this->socket);

        if (!empty($info['timed_out'])) {
            throw new RuntimeException($this->host . ' has timed out');
        }

        if ($response === false) {
            throw new RuntimeException('Could not read from ' . $this->host);
        }

        return $response;
    }




    /**
     * Create a connection to the remote host
     * Concrete adapters for this class will implement their own unique connect scripts,
     * using the _connect() method to create the socket resource.
     */
    abstract public function connect();

    /**
     * @param iCommand $command
     * @return mixed
     */
    abstract public function execute(iCommand $command);

    /**
     * @return array (array of string)
     */
    abstract public function getCommands();

    /**
     * @param string $command
     * @return bool
     */
    abstract public function hasCommand($command);


}
