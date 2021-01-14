<?php

namespace App\SpaceDefence\Model\Vessel;

use App\SpaceDefence\Model\Vessel;
use App\SpaceDefence\Model\Vessel\SupportCraft\MedicalUnit;
use App\SpaceDefence\Model\Vessel\SupportCraft\Order;

abstract class SupportCraft extends Vessel
{
    protected MedicalUnit $medicalUnit;
    protected Order $order;

    public function addMedicalUnit(MedicalUnit $medicalUnit)
    {
        $this->medicalUnit = $medicalUnit;
    }

    public function addOrder(Order $order)
    {
        $this->order = $order;
    }
}
