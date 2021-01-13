<?php

/**
 * This class create a grid of 100x100 boxes
 */
class GridController
{
    public function gridInit($grid)
    {
        /**Loop on the vertical lines */
        for ($i = 0; $i < 100; $i++) {
            /**Loop on the horizontal lines */
            for ($j = 0; $j < 100; $j++) {

                echo $grid[$i][$j] = 'x |';
            }
            echo "<br>";
        }
    }
}
