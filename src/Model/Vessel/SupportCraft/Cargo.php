<?php

namespace src\Model\Vessel\SupportCraft;

use src\Model\Vessel\SupportCraft;

/** This Class implement a Cargo vessel type */
class Cargo extends SupportCraft
{
    public const TYPE = 'cargo';

     public function __construct()
    {
        $this->type = self::TYPE;
    }
}
