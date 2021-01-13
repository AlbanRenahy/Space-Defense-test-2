<?php

class SupportCraft extends Vessel
{
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