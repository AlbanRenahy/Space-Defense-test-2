<?php

use src\Model\Grid;

require_once('./src/Model/Grid.php');

$map = new Grid();
$grid = [];
var_dump($map->gridInit($grid));

