<?php
$string = "World";
echo 'Hello'." ".$string;
echo "<br>";
echo nl2br("hello\n World");

echo "<br>";
$float = 3.14;
echo " float: $float <br>";

$boolean = true;
echo "boolean: " . $boolean . "<br>";

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
