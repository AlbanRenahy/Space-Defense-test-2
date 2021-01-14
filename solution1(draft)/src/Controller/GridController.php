<?php

/**
 * This class create a grid of 100x100 boxes
 */
class GridController
{
    public function gridInit($grid)
    {

        for ($i = 0; $i < 100; $i++) {
            for ($j = 0; $j < 100; $j++) {

                $grid[$i][$j] = 0;
            }
        }

        for ($i = 0; $i < 100; $i++) {
            for ($j = 0; $j < 100; $j++) {

                echo $grid[$i][$j] . "\t |";
            }
            echo "<br>";
        }
    }
}
