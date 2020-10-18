<?php

require_once 'Truck.php';

$truck1 = new Truck ('Black', 3, 'fuel', 50);
$truck2 = new Truck('White', 2, 'electric', 20);

echo '<p>' . $truck1->getColor() . ' truck: ' . '<br>';
$truck1->setFillingLevel(30);
echo $truck1->isFull() . '<br>';
echo $truck1->forward();
echo '<br> Vitesse du camion : ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake();
echo '<br> Vitesse du camion : ' . $truck1->getCurrentSpeed() . ' km/h' . '</p>';

echo '<p>' . $truck2->getColor() . ' truck: ' . '<br>';
$truck2->setFillingLevel(20);
echo $truck2->isFull() . '<br>';
echo $truck2->forward();
echo '<br> Vitesse du camion : ' . $truck2->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck2->brake();
echo '<br> Vitesse du camion : ' . $truck2->getCurrentSpeed() . ' km/h' . '</p>';
