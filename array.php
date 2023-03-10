<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$marks = [40, 50, 60];
$name = ['steve, shacker, ojiambo'];

#Add element
array_push($marks, 80);
array_unshift($marks);

array_pop($marks);
array_shift($marks);

echo '<pre>';
// var_dump[$marks];
echo '</pre>';


?>