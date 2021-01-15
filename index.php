<?php

require_once('./src/Model/Grid.php');

use src\Model\Grid;
use src\FleetBuilder;
use src\FleetComposition;

function testRandomMoveOfVesselOnGrid()
{
    $grid = Grid::createDimension();

    $fleetComposition = new FleetComposition();
    $fleetComposition->cargos = 10;
    $fleetComposition->mechanicalAssistances = 10;
    $fleetComposition->refuelers = 5;

    $fleetComposition->battleships = 10;
    $fleetComposition->cruisers = 10;
    $fleetComposition->destroyers = 5;

    $fleetBuilder = new FleetBuilder();
    $fleet = $fleetBuilder->createFleet($fleetComposition, 'Alban');

    if (($fleet->numberOfVessels) <= 50) {
        return true;
    } else {
        echo "The fleet is too big";
    }

    $grid->placeVesselsRandom($fleet);

    if (($grid->numbersOfPlacedVessels) <= 50) {
        return true;
    } else {
        echo "Too much placed vessels";
    }
}

return testRandomMoveOfVesselOnGrid();
