<?php

use app\Models\SupportCraft;
use app\Models\OffensiveCraft;

require_once('src/Models/OffensiveCraft.php');
require_once('src/Models/SupportCraft.php');
require_once('src/Controller/GridController.php');

/**
 * Build our different types of Support Vessel by instanciation of new Object SupportCraft(from Models)
 * New vessels can be added here in future with minimal effort
 *
 * @return void
 */

for ($i = 0; $i < 10; $i++) {

    $refuelVessel[$i] = new SupportCraft('Refuel');
}

for ($i = 0; $i < 10; $i++) {

    $cargoVessel[$i] = new SupportCraft('Cargo');
}

for ($i = 0; $i < 5; $i++) {

    $mechanicalVessel[$i] = new SupportCraft('Mechanical');
}

/**
 * Build our different types of Offensive Vessel by instanciation of new Object OffensiveCraft(from Models)
 * New vessels can be added here in future with minimal effort
 *
 * @return void
 */

for ($i = 0; $i < 5; $i++) {

    $battleshipVessel[$i] = new OffensiveCraft('Battleship' . $i, 24);
}

// set our command vessel !
$battleshipVessel[0]->isCommand = true;

for ($i = 0; $i < 10; $i++) {

    $cruiserVessel[$i] = new OffensiveCraft('Cruiser' . $i, 6);
}

for ($i = 0; $i < 10; $i++) {

    $destroyerVessel[$i] = new OffensiveCraft('Destroyer' . $i, 12);
}


/**Init the vessels arrays */
$totalSupportVessel = [];
$totalOffensiveVessel = [];

$totalSupportVessel = array_merge($totalSupportVessel, $refuelVessel, $cargoVessel, $mechanicalVessel);

$totalOffensiveVessel = array_merge($totalOffensiveVessel, $destroyerVessel, $cruiserVessel, $battleshipVessel);


echo '<h1>Space Defense</h1>';

echo 'Refuel Vessel : ' . count($refuelVessel) . '<br>';
echo 'Cargo Vessel : ' . count($cargoVessel) . '<br>';
echo 'Mech Vessel : ' . count($mechanicalVessel) . '<br>';
echo '<hr>';
echo 'Battleship Vessel : ' . count($battleshipVessel) . '<br>';
echo 'Cruiser Vessel : ' . count($cruiserVessel) . '<br>';
echo 'Destroyer Vessel : ' . count($destroyerVessel) . '<br>';
echo '<hr>';

/**Instanciation of the grid */
$map = new GridController();
$grid = [];
$map->gridInit($grid);
