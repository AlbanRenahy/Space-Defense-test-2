<?php

namespace App\SpaceDefense\Model\Tests;

use PHPUnit\Framework\TestCase;
use App\SpaceDefence\Model\Fleet;
use App\SpaceDefence\Model\Vessel;
use App\SpaceDefence\Model\Vessel\CommandShip;

/**
 * Testing the Fleet class functions to check if number of created vessels is equal to 50(total number of vessels)
 */
class FleetTest extends TestCase
{
    public function testFleet()
    {
        /** Instanciation of Fleet and CommandShip classes. CammandShip has no utility from now, but will work on it later */
        $commandShip = new CommandShip();
        $fleet = new Fleet($commandShip);


        /**Set the number of vessels for each support craft */
        $supportCraftCreation = function (Fleet $fleet) {
            for ($i = 1; $i <= 10; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\Cargo());
            }
            for ($i = 1; $i <= 10; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\MechanicalAssistance());
            }
            for ($i = 1; $i <= 5; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\Refueling());
            }
        };

        /**Set the number of vessels for each offensive craft */
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

        /** Passing in parameters the fleet object that has a fleet composition set to 0*/
        $supportCraftCreation($fleet);
        $offensiveCraftsCreation($fleet);

        /**AssertEquals allo phpUnit to verify if 2 variables are equal. In this case, if the total number of vessels is equel to 50 */
        $this->assertEquals(50, $fleet->numberOfVessels());
    }
}
