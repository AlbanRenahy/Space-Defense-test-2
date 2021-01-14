<?php

namespace src\Model;

use src\Exception\FleetMaxVessels;
use src\Model\Vessel\CommandShip;
use src\Model\Vessel\OffensiveCraft;
use src\Model\Vessel\SupportCraft;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

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

    /** Function to throw an error if max vessels number is overwelmed */
    private function assertMaxComposition()
    {
        if ($this->fleetComposition == self::MAX_VESSELS) {
            throw new FleetMaxVessels();
        }
    }

    /** Return the number of vessels */
    public function numberOfVessels(): int
    {
        return $this->fleetComposition;
    }

    /** The 2 fleet groups need to be equal. If it's not equal, return false*/
    public function isFleetGroupsEquals(): bool
    {
        return $this->offensiveCrafts->count() == $this->supportCrafts->count();
    }

    /**Private function to merge the 2 arrays (Support and Offensive crafts) */
    private function vessels(): Collection
    {
        return new ArrayCollection(array_merge($this->supportCrafts->toArray(), $this->offensiveCrafts->toArray()));
    }

    /** Function that place vessels on the grid*/
    public function placeVesselsOnGridRandom(Grid $grid)
    {
        /**generate all the positions on the grid with function random */
        $generatePosition = function() use ($grid) {
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


}
