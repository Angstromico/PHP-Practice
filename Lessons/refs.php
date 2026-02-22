<?php 
$person = "John Doe";
$client = &$person;

var_dump($person);
var_dump($client);

$client = "Jane Smith";

var_dump($person, $client);

$person = "Alice Johnson";

var_dump($person, $client);

function doubleValue(int &$number): void {
    $number *= 2;
}

$original_value = 5;
doubleValue($original_value);
echo "Doubled value: $original_value\n";