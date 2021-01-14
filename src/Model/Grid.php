<?php

namespace src\Model;

use src\Exception;

class Grid
{
    private $positions;

    private $x;
    private $y;

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

    public function show(){
        echo 'coucouc';
    }
}
