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

    /** x axis for the grid */
    public function x(): int
    {
        return $this->x;
    }

    /** y axis for the grid */
    public function y(): int
    {
        return $this->y;
    }

    /** Set the grid dimensions */
    public static function createDimension($x = 100, $y = 100)
    {
        return new self($x, $y);
    }

    /** Place vessels randomly */ 
    public function placeVesselsRandom(Fleet $fleet): void
    {
        $fleet->placeVesselsOnGridRandom($this);
    }

    /** Place vessel at a certain position */ 
    public function placeVesselAtPosition(Position $position, Vessel $vessel): void
    {
        /** A vessel occupy a certain position */
        $position->occupiedBy($vessel);
        /** We add this position in the positions array collection */
        $this->positions->add($position);
    }

    /** Function checking if the position is already alocated */
    public function isPositionIsNotAlreadyAllocated(Position $position): bool
    {
        /** this->positions refer to the array collection */
        foreach ($this->positions as $positionCollectionItem) {
            /** $position refer to the random number set to each grid box) */
            $a = [$position->y(), $position->x()];
            /** $positionCollectionItem refer to a position already allocated by a vessel (see placeVesselAtPosition() */
            $b = [$positionCollectionItem->y(), $positionCollectionItem->x()];

            /** If $a === $b, it means that position is not already allocated. */
            if ($a === $b) {
                return true;
            }
        }

        return false;
    }

    /** Function to have the number of placed vessels from positions collection */
    public function numbersOfPlacedVessels(): int
    {
        return $this->positions->count();
    }

    // 5 - remove the position

    // 6 - place vessels in pair mode

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
