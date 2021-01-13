<?php

namespace src\Models;
use src\Models\Vessel;

class OffensiveCraft
{
    /**
     * There is different types of vessels that will be created. Init to an empty string
     *
     * @var string
     */
    protected $vesselType = '';

    /**
     * Each offensive craft can be instructed to raise their shields. Init to false
     *
     * @var boolean
     */
    protected $raiseShield = false;

    /**
     * Each offensive craft can receive an attack command. Init to false
     *
     * @var boolean
     */
    protected $attack = false;

    /**
     * Offensive crafts have different numbers of cannons. Init to 0
     *
     * @var integer
     */
    protected $nbCannon = 0;

    /**
     * There is one command ship. The command ship is one of the battleships. Init to false, and will be set to true when battleships are created
     *
     * @var boolean
     */
    public $isCommand = false;

    /**
     * Build the parameters of a new future OffensiveVessel. This vessel will have a type(cruiser, destroyer etc...) and a precise number of cannons
     *
     * @param [type] $type
     * @param [type] $nbCannon
     */
    public function __construct($type, $nbCannon)
    {
        $this->vesselType = $type;
        $this->nbCannon = $nbCannon;
    }
}
