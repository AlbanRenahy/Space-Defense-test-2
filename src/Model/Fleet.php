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

    public function isFleetGroupsEquals(): bool
    {
        return $this->offensiveCrafts->count() == $this->supportCrafts->count();
    }


}
