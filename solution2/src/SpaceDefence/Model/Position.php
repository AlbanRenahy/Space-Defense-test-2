<?php

namespace App\SpaceDefence\Model;

/**
 * Future position of a vessel on the grid
 */
class Position
{
    private int $x;
    private int $y;

    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
}