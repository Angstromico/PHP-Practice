<?php 

$superhero = "Superman";

function displaySuperhero() {
    global $superhero; // Access the global variable within the function
    echo "The superhero is: $superhero\n";
}

echo "Before calling the function: $superhero\n";
displaySuperhero();
echo "After calling the function: $superhero\n";

function countVisitors() {
    static $visitor_count = 0; // This variable retains its value between function calls
    $visitor_count++;
    echo "Visitor count: $visitor_count\n";
}

echo "Counting visitors:\n";
countVisitors(); // Visitor count: 1
countVisitors(); // Visitor count: 2
countVisitors(); // Visitor count: 3