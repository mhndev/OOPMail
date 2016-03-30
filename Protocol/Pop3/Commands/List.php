<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 10:33 PM
 */

namespace mhndev\OOPMail\Protocol\Pop3\Commands;

/**
 * @Todo change class name to List in php7 cause php 5 doesn't support use of keywords as name
 * Class ListCommand
 * @package mhndev\OOPMail\Protocol\Pop3\Commands
 */
class ListCommand implements \iCommand
{

    /**
     * Invoke a command
     * @return mixed
     */
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    /**
     * @return \mhndev\OOPMail\Interfaces\iProtocol
     */
    public function getProtocol()
    {
        // TODO: Implement getProtocol() method.
    }
}
