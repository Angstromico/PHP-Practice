<?php 
$person = "John Doe";
$client = &$person;

var_dump($person);
var_dump($client);

$client = "Jane Smith";

var_dump($person, $client);

$person = "Alice Johnson";

var_dump($person, $client);