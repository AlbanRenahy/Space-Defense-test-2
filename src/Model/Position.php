<?php

namespace src\Model;

/**
 * Handling position of a vessel on the grid
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

    /**Function Generating a random position number for each grid box*/
    public static function random(Grid $grid)
    {
        $x = rand(0, $grid->x());
        $y = rand(0, $grid->y());

         return new self($x, $y);
    }

    /** A vessel occupy*/
    public function occupiedBy(Vessel $vessel)
    {
       $this->occupiedBy = $vessel;
    }

    /** Refer to x axis for the positions on the grid*/
    public function x(): int
    {
        return $this->x;
    }

    /** Refer to y axis for the positions on the grid */
     public function y(): int
    {
        return $this->y;
    }

}