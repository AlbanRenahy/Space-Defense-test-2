<?php

namespace src\Models;
use src\Models\Vessel;

class SupportCraft
{
    /**
     * There is different types of vessels that will be created. Init to an empty string
     *
     * @var string
     */
    protected $vesselType = '';

    /**
     * Each support Craft carry a medical unit. Init to true
     * Protected, to be visible in all classes that extend this class, also parent class
     *
     * @var boolean
     */
    protected $medicalUnit = true;

    /**
     * Each support craft can receive an order related to each of the tasks it can carry out. Init to empty string
     * Protected, to be visible in all classes that extend this class, also parent class
     *
     * @var string
     */
    protected $order = '';

    /**
     * Build the parameters of a new future SupportVessel. This vessel will have a type(refueling, cargo etc...)
     *
     * @param [type] $type
     */
    public function __construct($type)
    {
        $this->vesselType = $type;
    }
}