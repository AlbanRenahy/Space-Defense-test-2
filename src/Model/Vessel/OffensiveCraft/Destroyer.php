<?php

namespace src\Model\Vessel\OffensiveCraft;

use src\Model\Vessel\OffensiveCraft;

/** This Class implement a Destroyer vessel type */
class Destroyer extends OffensiveCraft
{
    public const TYPE = 'destroyer';

    public function __construct()
    {
        $this->cannons = 12;
        $this->type = self::TYPE;

        parent::__construct();
    }
}
