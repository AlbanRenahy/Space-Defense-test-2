<?php

namespace src\Model\Vessel;

use src\Model\Vessel;
use src\Model\Vessel\SupportCraft\MedicalUnit;
use src\Model\Vessel\SupportCraft\Order;

/** An abstract class is a class that we cannot get an instance of. This class is only used to make support vessels inherit its properties */
abstract class SupportCraft extends Vessel
{
    protected $medicalUnit;
    protected $order;

    /** Add a medical unit to the vessel */
    public function addMedicalUnit(MedicalUnit $medicalUnit)
    {
        $this->medicalUnit = $medicalUnit;
    }

    /** TODO: On the data structure, vessels don't have orders as they have a medical unit. Each vessel can receive different orders. Different strategy that I need to implement */
    public function addOrder(Order $order)
    {
        $this->order = $order;
    }
}
