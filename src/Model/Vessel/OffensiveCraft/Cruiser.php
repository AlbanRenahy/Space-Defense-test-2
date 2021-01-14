<?php

namespace src\Model\Vessel\OffensiveCraft;

use src\Model\Vessel\OffensiveCraft;

class Cruiser extends OffensiveCraft
{
    public const TYPE = 'cruiser';

    public function __construct()
    {
        $this->cannons = 6;
        $this->type = self::TYPE;

        parent::__construct();
    }
}
