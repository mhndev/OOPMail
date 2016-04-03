<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 10:41 PM
 */

namespace mhndev\OOPMail\Protocol\Imap\Commands;

use mhndev\OOPMail\Interfaces\iProtocol;
use mhndev\OOPMail\Protocol\AbstractCommand;

class Lsub extends AbstractCommand
{

    /**
     * Invoke a command
     * @param iProtocol $protocol
     * @param string|null $expect
     * @return mixed
     */
    public function __invoke(iProtocol $protocol, $expect = null)
    {
        // TODO: Implement __invoke() method.
    }
}
