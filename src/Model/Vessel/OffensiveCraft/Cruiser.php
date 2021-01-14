<?php

namespace src\Model\Vessel\OffensiveCraft;

use src\Model\Vessel\OffensiveCraft;

/** This Class implement a Cruiser vessel type */
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
