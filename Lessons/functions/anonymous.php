<?php 

declare(strict_types=1);

$greed = function (string $name): string {
    return "Hello, $name!";
};

echo $greed("Alice") . "\n"; 

$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map(function (int $number): int {
    return $number * $number;
}, $numbers);

print_r($squaredNumbers);

$message = "This is a message."; 
$say_message = function( string $name) use (&$message) {
    $message = "This is a different message.";

    return "$name says: $message";
};

echo $say_message("Bob") . "\n";
echo $message . "\n";