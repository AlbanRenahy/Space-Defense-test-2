<?php

namespace App\SpaceDefence\Model\Vessel;

use App\SpaceDefence\Model\Vessel;
use App\SpaceDefence\Model\Vessel\SupportCraft\MedicalUnit;

/**
 * Common elements to all support crafts.
 * Each support craft has a medical unit and can receive an order
 */
abstract class SupportCraft extends Vessel
{
    protected MedicalUnit $medicalUnit;

    public function addMedicalUnit(MedicalUnit $medicalUnit)
    {
        $this->medicalUnit = $medicalUnit;
    }

    public function doThatNow(string $that)
    {
        echo (string) $that;
    }
}
