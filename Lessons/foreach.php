<?php

$basket = ["Apple" => 5, "Banana" => 10, "Watermelon" => 2];
$total = 0;

foreach($basket as $fruit => $amount)
{
    echo "$fruit: $amount\n";
    $total += $amount;
}

echo "The total of fruits in basket is $total 🍑!\n";