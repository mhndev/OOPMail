<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:22 PM
 */
namespace mhndev\OOPMail\Interfaces;

interface iAddress
{

    /**
     * Majid Abdolhosseini<majid8911303@gmail.com>
     * get first part of above string
     * @return mixed
     */
    public function getName();

    /**
     * get second part of above string
     * @return mixed
     */
    public function getEmail();
}
