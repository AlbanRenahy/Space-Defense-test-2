<?php

namespace src\Model\Vessel;

use src\Model\Vessel;

/**
 * Common elements to all offencive crafts.
 * Each offencive craft can attack with fire canons, and raiseShield. Cannons are set to 0. Each new offensive craft will have a proper number of canons
 */
abstract class OffensiveCraft extends Vessel
{
    protected $cannons;
    private $shieldRaised;

    public function __construct()
    {
        parent::__construct();

        $this->shieldRaised = false;
        $this->cannons = 0;
    }

    public function attack(Vessel $target): void
    {
        $this->fireCanons();

        $target->receiveAttack();

    }

    private function fireCanons(): void
    {
        //@todo remove some bullets on the vessel
    }

    public function invertShields(): void
    {
        $this->shieldRaised = !$this->shieldRaised;
    }
}
