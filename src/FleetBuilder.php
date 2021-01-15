<?php

namespace src;

use src\Model\Character;
use src\Model\Fleet;
use src\Model\Role;
use src\Model\Vessel;

/** Class to add different numbers of vessels to fleet */
class FleetBuilder
{
    /** Add each type of vessel to fleet */
    public function createFleet(FleetComposition $fleetComposition, string $commandantName): Fleet
    {
        $commandant = new Character(Role::admiral(), $commandantName);
        $commandShip = new Vessel\CommandShip($commandant);

        $fleet = new Fleet($commandShip);


        if ($fleetComposition->cargos) {
            for ($i = 1; $i <= $fleetComposition->cargos; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\Cargo());
            }
        }

        if ($fleetComposition->mechanicalAssistances) {
            for ($i = 1; $i <= $fleetComposition->mechanicalAssistances; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\MechanicalAssistance());
            }
        }

        if ($fleetComposition->refuelers) {
            for ($i = 1; $i <= $fleetComposition->refuelers; $i++) {
                $fleet->addSupportCraft(new Vessel\SupportCraft\Refueling());
            }
        }

        if ($fleetComposition->battleships) {
            for ($i = 1; $i <= $fleetComposition->battleships; $i++) {
                $fleet->addOffensiveCraft(new Vessel\OffensiveCraft\Battleship());
            }
        }

        if ($fleetComposition->cruisers) {
            for ($i = 1; $i <= $fleetComposition->cruisers; $i++) {
                $fleet->addOffensiveCraft(new Vessel\OffensiveCraft\Cruiser());
            }
        }

        if ($fleetComposition->destroyers) {
            for ($i = 1; $i <= $fleetComposition->destroyers; $i++) {
                $fleet->addOffensiveCraft(new Vessel\OffensiveCraft\Destroyer());
            }
        }

        return $fleet;
    }
}
