<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:25 PM
 */

namespace mhndev\OOPMail\Transport;

use mhndec\OOPMail\Interfaces\iTransport;
use mhndev\OOPMail\Interfaces\iMessage;


/**
 * SMTP connection object
 *
 * Loads an instance of iMessage and forwards smtp transactions
 */
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
