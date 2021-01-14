<?php

namespace src\Model\Vessel\SupportCraft;

use src\Model\Vessel\SupportCraft;

class MechanicalAssistance extends SupportCraft
{
    private const TYPE = 'mechanical_assistance';

     public function __construct()
    {
        $this->type = self::TYPE;
    }
}
