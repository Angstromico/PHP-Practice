<?php 
declare(strict_types=1);
require_once __DIR__ . '/../generals.php';

function greet(string $name, string $greeting = "Hello", bool $shout = false) {
 $message = "$greeting, $name";

 if ($shout) {
    return strtoupper($message);
 }

 return $message;
}

echo appendNewLine(greet("World", "Hi", true));
echo appendNewLine(greet("World", "Hi"));