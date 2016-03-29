<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:25 PM
 */

namespace mhndev\OOPMail;

use mhndev\OOPMail\Interfaces\iMessage;

class Message implements iMessage
{

    /**
     * @return string
     */
    public function getHeaders()
    {
        // TODO: Implement getHeaders() method.
    }

    /**
     * @return string
     */
    public function getBody()
    {
        // TODO: Implement getBody() method.
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        // TODO: Implement getSubject() method.
    }

    /**
     * @return string
     */
    public function getCc()
    {
        // TODO: Implement getCc() method.
    }

    /**
     * @return mixed
     */
    public function getBcc()
    {
        // TODO: Implement getBcc() method.
    }

    /**
     * @return string
     */
    public function getReplyTo()
    {
        // TODO: Implement getReplyTo() method.
    }

    /**
     * @return string
     */
    public function toString()
    {
        // TODO: Implement toString() method.
    }

    /**
     * @param $rawMessage
     * @return iMessage
     */
    public function fromString($rawMessage)
    {
        // TODO: Implement fromString() method.
    }
}
