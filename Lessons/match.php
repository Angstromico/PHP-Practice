<?php
$status = 201;

$message = match($status) {
    200, 201, 202 => "OK\n",
    404 => "Not Found\n",
    500 => "Internal Server Error\n",
    default => "Unknown Status\n"
};

echo "The status is $message";