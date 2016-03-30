<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:53 PM
 */

namespace Zend\Mail\Protocol\Pop3;

use iCommand;
use mhndev\OOPMail\Protocol\AbstractProtocol;

class Pop3 extends AbstractProtocol
{

    /**
     * Create a connection to the remote host
     * Concrete adapters for this class will implement their own unique connect scripts,
     * using the _connect() method to create the socket resource.
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
