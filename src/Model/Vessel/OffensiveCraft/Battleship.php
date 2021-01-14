<?php

namespace src\Model\Vessel\OffensiveCraft;

use src\Model\Vessel\OffensiveCraft;

class Battleship extends OffensiveCraft
{
    public const TYPE = "battleship";

    public function __construct()
    {
        $this->cannons = 24;
        $this->type = self::TYPE;
        parent::__construct();
    }
}
