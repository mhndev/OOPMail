<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:26 PM
 */
namespace mhndec\OOPMail\Interfaces;

use mhndev\OOPMail\Interfaces\iMessage;

/**
 * Interface for mail transports
 */
interface iTransport
{
    /**
     * Send a mail message
     * @param iMessage $message
     * @return
     */
    public function send(iMessage $message);
}
