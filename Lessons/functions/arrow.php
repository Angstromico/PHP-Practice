<?php 
declare(strict_types=1);

$numbers = [1, 2, 3, 4, 5];
$multiplayer = 3;

$squared = array_map(fn(int $n) => $n ** 2, $numbers);

var_dump($numbers, $squared);

#Example of use of multiplayer in normal function
$timesThree = array_map(function (int $n) use ($multiplayer) {
 return $n * $multiplayer;
}, $numbers);

var_dump(
 $timesThree
);

#Example with arrow
$timesThreeArrow = array_map(fn(int $n) => $n * $multiplayer, $numbers); 

var_dump($timesThreeArrow);