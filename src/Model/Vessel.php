<?php

namespace src\Model;

/**
 * Common elements to all vessels
 * Every vessel has a position(on the future grid) and a function moveTo, each vessel can also receive an attack
 */
abstract class Vessel
{
    private $position;

    public function __construct()
    {
        $this->position = new Position();
    }

    /** Function that will allow a vessel to move(not in use at the moment) */
    public function moveTo(Position $position)
    {
        $this->position = $position;
    }

    /** Function that will delete vital point of an attacked vessel */
    public function receiveAttack()
    {
        //@todo delete vital points
    }


    /** A vessel is assignated as a 'pair' */
    public function pair(): Vessel
    {
        return $this->pair;
    }

    /** I set a second vessel pair */
    public function setPair(Vessel $vessel)
    {
        $this->pair = $vessel;
    }

    /** I pair the first vessel with the second one */
    public function pairWith(Vessel $vessel)
    {
        $this->pair = $vessel;
        $vessel->setPair($this);
    }
}
