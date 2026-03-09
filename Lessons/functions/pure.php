<?php 
declare(strict_types=1);
require_once __DIR__ . '/../generals.php';

//Pure function 
function add(int $a, int $b): int
{
    return $a + $b;
}

echo appendNewLine(add(2, 3)); //5
echo appendNewLine(add(2, 3)); //Still 5

//Not pure function 
$total = 0;

function addToTotal(int $value) {
 global $total;
    $total += $value;
    return $total;
}

echo appendNewLine(addToTotal(2)); //2
echo appendNewLine(addToTotal(2)); //4
