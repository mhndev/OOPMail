<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:28 PM
 */

namespace mhndev\OOPMail;

use mhndev\OOPMail\Interfaces\iAddress;

class Address implements iAddress
{
    /**
     * Majid Abdolhosseini<majid8911303@gmail.com>
     * get first part of above string
     * @return mixed
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * get second part of above string
     * @return mixed
     */
    public function getEmail()
    {
        // TODO: Implement getEmail() method.
    }
}
