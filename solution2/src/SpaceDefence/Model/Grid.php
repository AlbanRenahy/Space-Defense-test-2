<?php

namespace App\SpaceDefence\Model;

use App\SpaceDefence\Exception;

class Grid
{
    private array $positions;

    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;

        $this->positions = [];
    }

    public static function createDimension($x = 100, $y = 100)
    {
        return new self($x, $y);
    }
}
