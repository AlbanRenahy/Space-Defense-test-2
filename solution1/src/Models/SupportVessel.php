<?php

use src\Models\SupportCraft;

class SupportVessel
{
    public function buildVesselType()
    {
        /**
         * Build our different types of Support Vessel by instanciation of new Object SupportCraft(from Models)
         * New vessels can be added here in future with minimal effort
         *
         * @return void
         */

        for ($i = 0; $i < 10; $i++) {

            $refuelVessel[$i] = new SupportCraft('Refuel' . $i);
        }

        for ($i = 0; $i < 10; $i++) {

            $cargoVessel[$i] = new SupportCraft('Cargo' . $i);
        }

        for ($i = 0; $i < 5; $i++) {

            $mechanicalVessel[$i] = new SupportCraft('Mechanical' . $i);
        }
    }
}
