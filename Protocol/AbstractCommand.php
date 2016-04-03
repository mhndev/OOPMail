<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 4/3/16
 * Time: 11:58 PM
 */

namespace mhndev\OOPMail\Protocol;

use iCommand;
use mhndev\OOPMail\Interfaces\iProtocol;

abstract class AbstractCommand implements \iCommand
{

    /**
     * @var iProtocol
     */
    protected $protocol;

    /**
     * @var string
     */
    protected $expected;

    /**
     * @var boolean
     */
    protected $isOk;

    /**
     * @var string
     */
    protected $response;

    /**
     * @var boolean
     */
    protected $executed;

    /**
     * Invoke a command
     * @param iProtocol $protocol
     * @param string|null $expect
     * @return mixed
     */
    abstract public function __invoke(iProtocol $protocol, $expect = null);

    /**
     * @return \mhndev\OOPMail\Interfaces\iProtocol
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function expect($value = null)
    {
        // TODO: Implement expect() method.
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        // TODO: Implement getResponse() method.
    }

    /**
     * @return boolean
     */
    public function isOk()
    {
        // TODO: Implement isOk() method.
    }
}
