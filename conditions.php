<?php

$age = 20;

if ($age >= 18) {
    echo "<h3>You are an adult.</h3>";
} else {
    echo "<h3>You are a minor.</h3>";
}

echo "<br>";

$number = "abc";

if (!is_numeric($number)) {
    echo "<h3>The input is not a valid number.</h3>";
} else {
    echo "<h3>The input is a valid number.</h3>";
}
echo "<br>";


$file = "path/to/file.txt";

if (!file_exists($file)) {
    echo "<h3>File does not exist.</h3>";
} else {
    echo "<h3>File found.</h3>";
}


echo "<br>";

$x = 10;

if ($x > 5) 
{  
    echo "<h3>X is greater than 5</h3>";
}

echo "<br>";

$x = 3;

if ($x) {  
    echo "<h3>X is non-zero</h3>";
}

echo "<br>";

$age = 65;
if ($age >= 18) {
    echo "<h3>You are eligible to vote.<br></h3>";

    if ($age >= 60) {
        echo "<h3>You are eligible for a senior citizen discount.</h3>";
    } else {
        echo "<h3>You are not eligible for a senior citizen discount.</h3>";
    }
} else {
    echo "<h3>You are not eligible to vote.</h3>";
}


$score = 85;

if ($score >= 50) {
    echo "<h3>You passed the exam.<br></h3>";

    if ($score >= 90) {
        echo "<h3>Excellent performance! You get a bonus.</h3>";
    } elseif ($score >= 75) {
        echo "<h3>Good performance!</h3>";
    } else {
        echo "<h3>You passed, but there's room for improvement.</h3>";
    }
} else {
    echo "<h3>You failed the exam.</h3>";
}

?>
