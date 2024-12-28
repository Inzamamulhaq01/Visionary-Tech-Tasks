<?php

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
echo "<br>";

$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

echo "<br>";

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

echo "<br>";

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

echo "<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

echo "<br>";

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

echo "<br>";


?>