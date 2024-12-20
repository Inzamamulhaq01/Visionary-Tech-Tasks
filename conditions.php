<?php

$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

echo "<br>";

$number = "abc";

if (!is_numeric($number)) {
    echo "The input is not a valid number.";
} else {
    echo "The input is a valid number.";
}
echo "<br>";


$file = "path/to/file.txt";

if (!file_exists($file)) {
    echo "File does not exist.";
} else {
    echo "File found.";
}


echo "<br>";

$x = 10;

if ($x > 5) 
{  
    echo "X is greater than 5";
}

echo "<br>";

$x = 3;

if ($x) {  
    echo "X is non-zero";
}

echo "<br>";

$age = 65;
if ($age >= 18) {
    echo "You are eligible to vote.<br>";

    if ($age >= 60) {
        echo "You are eligible for a senior citizen discount.";
    } else {
        echo "You are not eligible for a senior citizen discount.";
    }
} else {
    echo "You are not eligible to vote.";
}


$score = 85;

if ($score >= 50) {
    echo "You passed the exam.<br>";

    if ($score >= 90) {
        echo "Excellent performance! You get a bonus.";
    } elseif ($score >= 75) {
        echo "Good performance!";
    } else {
        echo "You passed, but there's room for improvement.";
    }
} else {
    echo "You failed the exam.";
}

?>