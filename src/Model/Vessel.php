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

    public function moveTo(Position $position)
    {
        $this->position = $position;
    }

    public function receiveAttack()
    {
        //@todo delete vital points
    }
}
