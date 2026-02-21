<?php 
function greet(string $name) : string {
    return "Hello, $name!";
}

echo greet("Alice\n");

function greetWithTime(string $name, ?DateTimeInterface $time = null): string {
    $formatTime = $time ?? new DateTime();
    
    $hour = (int)$formatTime->format("H");

    if ($hour < 12) {
        return "Good morning, $name!\n";
    } elseif ($hour < 18) {
        return "Good afternoon, $name!\n";
    } else {
        return "Good evening, $name!\n";
    }
}

echo greetWithTime("Memz"); // Current hour
echo greetWithTime("Memz", new DateTime("20:00:00"));