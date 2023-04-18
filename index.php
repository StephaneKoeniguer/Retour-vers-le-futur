<?php

$presentTime = new DateTime;
$destinationTime = new DateTime;


echo "Date de départ" . " " . $presentTime->format('m-d-Y-h-i') . "<br>";

$futur = new DateInterval('P50Y8M5D');

date_add($destinationTime, $futur);

echo "Date d'arrivé" . " " . $destinationTime->format('m-d-Y h-i') . "<br>";

$interval = date_diff($presentTime, $destinationTime);

echo "Interval de temps" . " " . $interval->format('%Y:%M:%D %H:%I');
