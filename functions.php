<?php
function myMessage() {
    echo "Hello world!";
  }
myMessage();

function Name($name) {
    echo "Hi $name.<br>";
  }
  
Name("abc");
Name("xyz");

function DOB($name, $year) {
    echo "$name Refsnes. Born in $year <br>";
  }
  
DOB("abc", "1975");
DOB("efg", "1978");
DOB("xyz", "1983");

function height($min = 50) {
    echo "The height is : $min<br>";
  }
  
height(350);
height(); 
height(135);


function car($name) {
    echo "Car Name : $name<br>";
  }
  
  car("Tata");
  car("Audi"); 
  car("Benz");


function sum($x, $y) {
    return $x + $y;
  }
  
echo "sum = " . sum(20, 10);

echo "<br>";


function add_five(&$value) {
    $value += 5;
  }
  
$num = 2;
add_five($num);
echo $num;

?>
