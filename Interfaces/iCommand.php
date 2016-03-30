<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 10:37 PM
 */

interface iCommand
{
    /**
     * Invoke a command
     * @return mixed
     */
    public function __invoke();

    /**
     * @return \mhndev\OOPMail\Interfaces\iProtocol
     */
    public function getProtocol();
}
