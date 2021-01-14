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
}
