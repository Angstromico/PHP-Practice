<?php

$secret = 'Magic';
$attempts = 0;
$max_attempts = 5;

while($attempts < $max_attempts) {
 echo "What is the secret? ";
 $input = trim(fgets(STDIN));
 $attempts++;
 if($input === $secret) {
     echo "Congratulations! You know the secret! ";
     break;
 } else {
     echo "Nope, try again.";
 }

 if($attempts >= $max_attempts) {
     echo "Too many wrong attempts. ";
 }
} 
