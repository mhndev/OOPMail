<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/29/16
 * Time: 9:26 PM
 */
namespace mhndev\OOPMail\Interfaces;

use iCommand;

interface iProtocol
{
    /**
     * @param iCommand $command
     * @return mixed
     */
    public function execute(iCommand $command);

    /**
     * @return array (array of string)
     */
    public function getCommands();

    /**
     * @param string $command
     * @return bool
     */
    public function hasCommand($command);
}
