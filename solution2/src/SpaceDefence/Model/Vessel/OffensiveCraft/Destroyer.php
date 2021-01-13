<?php

namespace App\SpaceDefence\Model\Vessel\OffensiveCraft;

use App\SpaceDefence\Model\Vessel\OffensiveCraft;

class Destroyer extends OffensiveCraft
{
    public function __construct()
    {
        $this->cannons = 12;

        parent::__construct();
    }
}
