<?php

namespace src\Model\Vessel;

use src\Model\Vessel;

/**
 * Common elements to all offencive crafts.
 * Each offencive craft can attack with fire canons, and raiseShield. Cannons are set to 0. Each new offensive craft will have a proper number of canons
 * An abstract class is a class that we cannot get an instance of. This class is only used to make offencive vessels inherit its properties
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

    /** Function that will handle attacks. Still some work to do (with an amount of life for each vessel)*/
    public function attack(Vessel $target): void
    {
        $this->fireCanons();

        $target->receiveAttack();

    }

    private function fireCanons(): void
    {
        //@todo remove some bullets on the vessel
    }

    /** When a shield is raised one time, we can't raise it a second time */
    public function invertShields(): void
    {
        $this->shieldRaised = !$this->shieldRaised;
    }
}
