<?php 

declare(strict_types=1);

function sum(int ...$numbers): int {
    return array_sum($numbers);
}

echo sum(1, 2, 3, 4, 5) . "\n";
echo var_dump(sum());

$numbers = [10, 20, 30];
echo sum(...$numbers) . "\n";

function introduceTeam(string $teamName, string ...$members): string {
    $membersList = implode(", ", $members);
    return "Team $teamName consists of: $membersList.\n";
}

echo introduceTeam("Alpha", "Alice", "Bob", "Charlie");

$team_rocket = ["Jessie", "James", "Meowth"];
echo introduceTeam("Rocket", ...$team_rocket);

$team1 = ["Alice", "Bob"];
$team2 = ["Charlie", "Dave"];
echo introduceTeam("Combined", ...$team1, ...$team2);