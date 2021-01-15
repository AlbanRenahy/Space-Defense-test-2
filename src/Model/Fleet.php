<?php

namespace src\Model;

use src\Model\Vessel\CommandShip;
use src\Exception\FleetMaxVessels;
use src\Model\Vessel\SupportCraft;
use src\Model\Vessel\OffensiveCraft;

use Doctrine\Common\Collections\Collection;
use src\Model\Exception\InvalidComposition;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class that allow to had offensive and support craft, if max_vessels number is not overwhelmed
 */
class Fleet
{
    const MAX_VESSELS = 50;

    protected $commandShip;
    protected $offensiveCrafts;
    protected $supportCrafts;
    protected $fleetComposition;

    public function __construct(CommandShip $commandShip)
    {
        $this->commandShip = $commandShip;
        $this->offensiveCrafts = new ArrayCollection();
        $this->supportCrafts = new ArrayCollection();
        $this->fleetComposition = 0;
    }

    /** Add one offensive craft */
    public function addOffensiveCraft(OffensiveCraft $offensiveCraft): void
    {
        if ($this->offensiveCrafts->contains($offensiveCraft)) {
            return;
        }

        $this->assertMaxComposition();
        $this->offensiveCrafts->add($offensiveCraft);
        $this->fleetComposition++;
    }

    /** Add one support craft */
    public function addSupportCraft(SupportCraft $supportCraft): void
    {
        if ($this->supportCrafts->contains($supportCraft)) {
            return;
        }

        $this->assertMaxComposition();
        $this->supportCrafts->add($supportCraft);
        $this->fleetComposition++;
    }



    //-------------------------



    /** Return the number of vessels */
    public function numberOfVessels(): int
    {
        return $this->fleetComposition;
    }

    /** Function that throw a message when the max number of vessels is reached */
    private function assertMaxComposition()
    {
        if ($this->numberOfVessels() == self::MAX_VESSELS) {
            throw new FleetMaxVessels();
        }
    }



    //-------------------------



    /** The 2 fleet groups need to be equal. If it's not equal, return false. From now, this function is not in use anywhere*/
    public function isFleetGroupsEquals(): bool
    {
        return $this->offensiveCrafts->count() == $this->supportCrafts->count();
    }



    //-------------------------



    /**Private function to merge the 2 arrays (Support and Offensive crafts) */
    private function vessels(): Collection
    {
        return new ArrayCollection(array_merge($this->supportCrafts->toArray(), $this->offensiveCrafts->toArray()));
    }

    /** Function that place vessels on the grid randomly */
    public function placeVesselsOnGridRandom(Grid $grid)
    {
        /**generate all the positions on the grid with function random. Call to an anonym function to inherit $grid */
        $generatePosition = function () use ($grid) {
            return Position::random($grid);
        };

        /** this->vessels() refer to the collection of all vessels merged */
        foreach ($this->vessels() as $vessel) {
            $position = $generatePosition();
            while ($grid->isPositionIsNotAlreadyAllocated($position)) {
                $position = $generatePosition();
            }
            $grid->placeVesselAtPosition($position, $vessel);
        }
    }



    //-------------------------



    /** Set the algorithm to make pair of vessels */

    public function pairVessels(Grid $grid)
    {
        if (count($this->vessels()) % 2 != 0) {
            throw new InvalidComposition();
        }

        /**This line create chunks from the vessels array. I use ceil to be sure to have an int after the division and not a float. With list(), I assign $groupe1 and $groupe2 as if they were arrays*/
        list($group1, $group2) = array_chunk($this->vessels()->toArray(), ceil(count($this->vessels()) / 2));

        /**Thanks to the array_merge of the two craft collections, the group 1 has one type of crafts and the group 2 has a second type of crafts */
        shuffle($group1);
        shuffle($group2);

        //TODO  1 - Generate position for each grid box (Position::random)

        // 2 - Import a solution to make the positions next to each other

        // 3 - Make $group1 paired with $group2 and iterate (foreach)

        
    }
}
