<?php
use mhndev\OOPMail\Interfaces\iProtocol;

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
     * @param iProtocol $protocol
     * @return mixed
     */
    public function __invoke(iProtocol $protocol);

    /**
     * @param string $value
     * @return $this
     */
    public function expect($value = null);

    /**
     * @return string
     */
    public function getResponse();


    /**
     * @return boolean
     */
    public function isOk();

    /**
     * @return iProtocol
     */
    public function getProtocol();
}
