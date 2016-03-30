<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:28 PM
 */

namespace mhndev\OOPMail\Protocol\Smtp\Commands\Extended\Auth;

/**
 * Performs CRAM-MD5 authentication
 */
class Crammd5 implements \iCommand
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
