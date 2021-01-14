<?php

namespace src\Model\Vessel\SupportCraft;

use src\Model\Vessel\SupportCraft;

class Refueling extends SupportCraft
{
    public const TYPE = 'refueling';

    public function __construct()
    {
        $this->type = self::TYPE;
    }
}
