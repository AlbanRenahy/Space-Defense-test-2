<?php

namespace src\Model\Vessel\SupportCraft;

use src\Model\Vessel\SupportCraft;

class Cargo extends SupportCraft
{
    public const TYPE = 'cargo';

     public function __construct()
    {
        $this->type = self::TYPE;
    }
}
