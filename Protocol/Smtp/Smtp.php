<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:28 PM
 */

namespace mhndev\OOPMail\Protocol\Smtp;

use mhndec\OOPMail\Interfaces\iTransport;
use mhndev\OOPMail\Interfaces\iMessage;

class Smtp implements iTransport
{

    /**
     * Send a mail message
     * @param iMessage $message
     */
    public function send(iMessage $message)
    {
        // TODO: Implement send() method.
    }
}
