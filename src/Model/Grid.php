<?php

namespace src\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class create a grid of 100x100 boxes
 */
class Grid
{
    private $positions;

    private $x;
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;

        $this->positions = new ArrayCollection();
    }

    // 1 - create the Dimensions

    // 2 - Place vessels randomly

    // 3 - Place vessels in pair mode

    // 4 - Place vessel at position

    // 5 - Is the position not already alocated ?

    // 6 - remove the position

    // 7 - Move a pair

    // 8 - get position of vessel

    // public function gridInit($grid)
    // {

    //     for ($i = 0; $i < 100; $i++) {
    //         for ($j = 0; $j < 100; $j++) {

    //             $grid[$i][$j] = 0;
    //         }
    //     }

    //     for ($i = 0; $i < 100; $i++) {
    //         for ($j = 0; $j < 100; $j++) {

    //             echo $grid[$i][$j] . "\t |";
    //         }
    //         echo "<br>";
    //     }
    // }
}
