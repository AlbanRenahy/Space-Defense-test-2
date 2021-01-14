<?php

namespace tests;

use src\Model\Character;
use src\Model\Fleet;
use src\Model\Role;
use src\Model\Vessel;
use PHPUnit\Framework\TestCase;

/**
 * Test to check if total number of vessels not overwhelming the total fleet number given
 */
class FleetTest extends TestCase
{
    public function testFleet()
    {
        $commandant = new Character(Role::admiral(), 'Alban');
        $commandShip = new Vessel\CommandShip($commandant);

        $fleet = new Fleet($commandShip);

        $supportCraftCreation = function (Fleet $fleet) {
            for ($i = 1; $i <= 5; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\Cargo());
            }
            for ($i = 1; $i <= 5; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\MechanicalAssistance());
            }
            for ($i = 1; $i <= 5; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\Refueling());
            }
        };

        $offensiveCraftsCreation = function (Fleet $fleet) {
            for ($i = 1; $i <= 10; $i++) {
                $fleet->addOffensiveCraft(new Vessel\OffensiveCraft\Battleship());
            }
            for ($i = 1; $i <= 10; $i++) {
                $fleet->addOffensiveCraft(new Vessel\OffensiveCraft\Cruiser());
            }
            for ($i = 1; $i <= 5; $i++) {
                $fleet->addOffensiveCraft(new Vessel\OffensiveCraft\Destroyer());
            }
        };

        $supportCraftCreation($fleet);
        $offensiveCraftsCreation($fleet);

        $this->assertEquals(40, $fleet->numberOfVessels());
    }
}
