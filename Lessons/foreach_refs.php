<?php 
$large_array = range(1, 1_000_000); //In PHP 7.4 and later, you can use underscores in numeric literals for better readability.
$start_time = microtime(true);
$start_memory = memory_get_usage();
$out = [];
foreach ($large_array as &$value) {
    //$out[] = $value * 2; // At elements at the end of the array, this will consume more memory as it creates a new array with each iteration.
    $value *= 2; // This modifies the original array in place, which is more memory efficient.
}
$end_memory = memory_get_usage();
$end_time = microtime(true);
$memory_used = ($end_memory - $start_memory) / (1024 * 1024); // Convert bytes to megabytes
echo "Memory used: " . $memory_used . " megabytes\n";
$duration = $end_time - $start_time;
echo "Duration: " . $duration . " seconds\n";

//Refs consumes more memory and time