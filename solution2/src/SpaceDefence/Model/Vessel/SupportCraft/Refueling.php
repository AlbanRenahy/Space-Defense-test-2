<?php

namespace App\SpaceDefence\Model\Vessel\SupportCraft;

use App\SpaceDefence\Model\Vessel\SupportCraft;

class Refueling extends SupportCraft
{
    public const TYPE = 'refueling';

    public function __construct()
    {
        $this->type = self::TYPE;
    }
}
