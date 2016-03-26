<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/26/16
 * Time: 5:19 PM
 */

namespace mhndev\OOPMail;

class Email
{

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var Header
     */
    protected $header;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var
     */
    protected $attachment;

    /**
     * @return mixed
     */
    public function send()
    {

    }
}
