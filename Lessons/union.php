<?php
declare(strict_types=1);

function processInput(int|float|string $input) {
    return match(true) {
        is_int($input) => $input * 2,
        is_float($input) => $input * 1.5,
        is_string($input) => strtoupper($input),
        default => throw new InvalidArgumentException('Unexpected input type'),
    };
}

echo processInput(5) . "\n";
echo processInput(5.5) . "\n";
echo processInput("hello") . "\n";