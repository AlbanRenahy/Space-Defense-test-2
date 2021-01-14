<?php

namespace src\Model\Vessel;

use src\Model\Vessel;
use src\Model\Vessel\SupportCraft\MedicalUnit;
use src\Model\Vessel\SupportCraft\Order;

abstract class SupportCraft extends Vessel
{
    protected $medicalUnit;
    protected $order;

    public function addMedicalUnit(MedicalUnit $medicalUnit)
    {
        $this->medicalUnit = $medicalUnit;
    }

    public function addOrder(Order $order)
    {
        $this->order = $order;
    }
}
