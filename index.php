<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo '<br>'.'</br>';
echo $bicycle->forward();
echo '<br>'.'</br>';
var_dump($bicycle);
echo '<br>'.'</br>';


require_once 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();
echo '<br>'.'</br>';
var_dump($car);

require_once 'camion.php';
$camion = new Camion();