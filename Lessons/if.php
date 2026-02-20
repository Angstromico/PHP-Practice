<?php
$x = 10;
if ($x > 5) echo "<p>x is greater than 5</p>";

if ($x < 5) echo "<p>x is less than 5<p>";

$score = 85;

if($score >= 90) {
    echo "<p>Grade: A</p>";
} elseif ($score >= 80) {
    echo "<p>Grade: B</p>";
} elseif ($score >= 70) {
    echo "<p>Grade: C</p>";
} else {
    echo "<p>Grade: D</p>";
}

function check_number_positive_negative(int $number) {
 if ($number > 0) {
        return "positive";
    } elseif ($number < 0) {
        return "negative";
    } else {
        return "zero";
    }
}

function check_number_odd_even(int $number) {
    if ($number % 2 == 0) 
        return "even";
    else 
        return "odd";   
}

$number = 15;

echo "<p>The number " . $number . " is " . check_number_positive_negative($number) . " and is " . check_number_odd_even($number) . "</p>";

$username = 'admin';
$password = 'password1234';

if($username === 'admin' && $password === 'password1234') {
    echo "<p>Login successful!</p>";
} else {
 echo "<p>Login failed!</p>";
}

