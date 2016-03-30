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
use mhndev\OOPMail\Interfaces\iMessage;
use mhndev\OOPMail\Protocol\AbstractProtocol;

class Smtp extends AbstractProtocol implements iTransport
{

    /**
     * Indicates that a session is requested to be secure
     *
     * @var string
     */
    protected $secure;

    public function __construct()
    {

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
        // TODO: Implement connect() method.
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
