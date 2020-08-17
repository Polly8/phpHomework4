<?php

require ('src/interfaces.php');
require ('src/abstractRate.php');
require ('src/rates.php');
require ('src/services.php');




$basicPrice = new basicRate(10, 41);
//$basicPrice->addService(new driverService());
//$basicPrice->addService(new gpsService(20));

$hourPrice = new hourRate(10, 41);
//$hourPrice->addService(new driverService());
//$hourPrice->addService(new gpsService(20));

$studentPrice = new studentRate(10, 41);
//$studentPrice->addService(new driverService());
//$studentPrice->addService(new gpsService(20));


echo $basicPrice->count();
echo '<br>';
echo $hourPrice->count();
echo '<br>';
echo $studentPrice->count();
echo '<br>';

