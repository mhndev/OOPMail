<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:23 PM
 */
namespace mhndev\OOPMail\Interfaces;

interface iMessage
{

    /**
     * @return string
     */
    public function getHeaders();

    /**
     * @return string
     */
    public function getBody();

    /**
     * @return string
     */
    public function getSubject();

    /**
     * @return string
     */
    public function getCc();

    /**
     * @return mixed
     */
    public function getBcc();


    /**
     * @return string
     */
    public function getReplyTo();

    /**
     * @return string
     */
    public function toString();


    /**
     * @param $rawMessage
     * @return iMessage
     */
    public function fromString($rawMessage);

}
