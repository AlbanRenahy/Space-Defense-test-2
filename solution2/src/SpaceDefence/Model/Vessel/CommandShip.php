<?php

namespace App\SpaceDefence\Model\Vessel;

use App\SpaceDefence\Model\Character;
use App\SpaceDefence\Model\Vessel;

/** Class reflecting the one commandShip of the Fleet(this commandShip has one character, the commandant(admrial)) */
class CommandShip extends Vessel
{
    public $commandant;

    public function __construct(Character $commandant)
    {
        /**I call the parent construct(vessel) because CommandShip need same variable initialization of Vessel(position)  */
        parent::__construct();

        $this->commandant = $commandant;
    }
}