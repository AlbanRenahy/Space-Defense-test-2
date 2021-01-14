<?php

namespace src\Model;

/**
 * Future position of a vessel on the grid
 */
class Position
{
    private $x;
    private $y;

    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
}