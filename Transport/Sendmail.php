<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:25 PM
 */

namespace Zend\Mail\Transport;

use mhndec\OOPMail\Interfaces\iTransport;
use mhndev\OOPMail\Interfaces\iMessage;

/**
 * Class for sending email via the PHP internal mail() function
 */
class Sendmail implements iTransport
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
