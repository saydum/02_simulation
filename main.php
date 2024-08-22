<?php

require 'vendor/autoload.php';

use App\Coordinates;
use App\Entity\Creature\Herbivore;
use App\Entity\Creature\Predator;
use App\Entity\Static\Rock;
use App\Entity\Static\Tree;
use App\Map;


$map = new Map(20, 20);

$herb = new Herbivore(new Coordinates(1, 1));
$pred = new Predator(new Coordinates(3, 1));

$tree = new Tree(new Coordinates(5, 5));
$rock = new Rock(new Coordinates(10, 15));

$map->addEntity($herb);
$map->addEntity($pred);
$map->addEntity($tree);
$map->addEntity($rock);

$map->render();




//while (true) {
//    for ($i = 0, $j = 10; $i <= 10; $i++, $j++) {
//        $herb->setCoordinates(new Coordinates($i, $j));
//        $pred->setCoordinates(new Coordinates($j, $i));
//        $map->addEntity($herb);
//        $map->addEntity($pred);
//        $map->render();
//    }
//}