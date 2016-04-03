<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 10:33 PM
 */

namespace mhndev\OOPMail\Protocol\Pop3\Commands;
use mhndev\OOPMail\Interfaces\iProtocol;
use mhndev\OOPMail\Protocol\AbstractCommand;

/**
 * @Todo change class name to List in php7 cause php 5 doesn't support use of keywords as name
 * Class ListCommand
 * @package mhndev\OOPMail\Protocol\Pop3\Commands
 */
class ListCommand extends AbstractCommand
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
