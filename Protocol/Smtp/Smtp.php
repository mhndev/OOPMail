<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:28 PM
 */

namespace mhndev\OOPMail\Protocol\Smtp;

use iCommand;
use mhndec\OOPMail\Interfaces\iTransport;
use mhndev\OOPMail\Exceptions\InvalidArgumentException;
use mhndev\OOPMail\Interfaces\iMessage;
use mhndev\OOPMail\Protocol\AbstractProtocol;

class Smtp extends AbstractProtocol implements iTransport
{

    /**
     * The transport method for the socket
     *
     * @var string
     */
    protected $transport = 'tcp';

    /**
     * Indicates that a session is requested to be secure
     *
     * @var string
     */
    protected $secure;

    public function __construct($host = '127.0.0.1', $port = null, array $config)
    {
        if (isset($config['ssl'])) {
            switch (strtolower($config['ssl'])) {
                case 'tls':
                    $this->secure = 'tls';
                    break;

                case 'ssl':
                    $this->transport = 'ssl';
                    $this->secure = 'ssl';
                    if ($port === null) {
                        $port = 465;
                    }
                    break;

                default:
                    throw new InvalidArgumentException($config['ssl'] . ' is unsupported SSL type');
            }
        }

        // If no port has been specified then check the master PHP ini file. Defaults to 25 if the ini setting is null.
        if ($port === null) {
            if (($port = ini_get('smtp_port')) == '') {
                $port = 25;
            }
        }

        parent::__construct($host, $port);
    }

    /**
     * Send a mail message
     * @param iMessage $message
     */
    public function send(iMessage $message)
    {
        // TODO: Implement send() method.
    }

    /**
     * Create a connection to the remote host
     *
     * Concrete adapters for this class will implement their own unique connect scripts, using the _connect() method to create the socket resource.
     */
    public function connect()
    {
        return $this->_connect($this->transport . '://' . $this->host . ':' . $this->port);
    }

    /**
     * @param iCommand $command
     * @return mixed
     */
    public function execute(iCommand $command)
    {
        // TODO: Implement execute() method.
    }

    /**
     * @return array (array of string)
     */
    public function getCommands()
    {
        // TODO: Implement getCommands() method.
    }

    /**
     * @param string $command
     * @return bool
     */
    public function hasCommand($command)
    {
        // TODO: Implement hasCommand() method.
    }
}
