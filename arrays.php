<?php

$cars = array("Volvo", "BMW", "Toyota");

foreach ($cars as $c)
{
    echo "$c<br>";
}


$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

echo "<br>";

var_dump($cars);

echo "<br>";

$flights = ["Air India","Qatar Airways","Emirates","Lufthansa"];

echo $flights[0];
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");

array_push($cars, "Ford");


$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
  }

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
echo $cars["year"];

echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);

print_r($cars);

echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);

print_r($cars);

echo "<br>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);

print_r($cars);

?>