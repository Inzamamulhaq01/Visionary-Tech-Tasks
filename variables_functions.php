<?php
$string = "Hello, World!";
echo " string: $string<br>";


$integer = 42;
echo "integer: $integer<br>";

$float = 3.14;
echo " float: $float<br>";

$boolean = true;
echo "boolean: " . ($boolean ? 'true' : 'false') . "<br>";

$array = array("apple", "banana", "cherry");
echo "array: ";
print_r($array);

echo "<br>";
class Car {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
}

$object = new Car("Tesla");
echo "object: ";
print_r($object);

echo "<br>";

var_dump($object);

echo "<br>";
$nullValue = NULL;
echo "null : ";
var_dump($nullValue);

?>
