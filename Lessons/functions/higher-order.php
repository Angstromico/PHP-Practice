<?php
declare(strict_types=1);

$users = [['id' => 1, 'name' => 'John', 'email' => 'john@example.com', 'role' => 'admin'],
    ['id' => 2, 'name' => 'Jane', 'email' => 'jane@example.com', 'role' => 'user'],
    ['id' => 3, 'name' => 'Bob', 'email' => 'bob@example.com', 'role' => 'admin']];

function createFilter(string $key, string|int $value)
{
    return function ($item) use ($key, $value) {
        return $item[$key] === $value;
    };
}

$is_admind = createFilter('role', 'admin');
$adminds = array_filter($users, $is_admind);

var_dump($adminds);

$is_bob = createFilter('name', 'Bob');
$bob = array_filter($users, $is_bob);

var_dump($bob);