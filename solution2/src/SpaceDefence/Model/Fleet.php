<?php

namespace App\SpaceDefence\Model;

use App\SpaceDefence\Exception\FleetMaxVessels;
use App\SpaceDefence\Model\Vessel\CommandShip;
use App\SpaceDefence\Model\Vessel\OffensiveCraft;
use App\SpaceDefence\Model\Vessel\SupportCraft;

/**
 * Class that allow to had offensive and support craft, if max_vessels number is not overwhelmed
 */
class Fleet
{
    const MAX_VESSELS = 50;

    private CommandShip $commandShip;
    protected array $offensiveCrafts;
    protected array $supportCrafts;
    private int $fleetComposition;

    public function __construct(CommandShip $commandShip)
    {
        $this->commandShip = $commandShip;
        $this->offensiveCrafts = [];
        $this->supportCrafts = [];
        $this->fleetComposition = 0;
    }

    /** Add one offensive craft */
    public function addOffensiveCraft(OffensiveCraft $offensiveCrafts): void
    {

        $this->assertMaxComposition();
        $this->offensiveCrafts++;
        $this->fleetComposition++;
    }

    /** Add one support craft */
    public function addSupportCraft(SupportCraft $supportCraft): void
    {

        $this->assertMaxComposition();
        $this->supportCrafts++;
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
}
