<?php

$secret = 'Magic';
$attempts = 0;
$max_attempts = 5;

while($attempts < $max_attempts) {
 echo "What is the secret? \n";
 $input = trim(fgets(STDIN));
 $attempts++;
 if($input === $secret) {
     echo "Congratulations! You know the secret! \n";
     break;
 } else {
     echo "Nope, try again.\n";
 }

 if($attempts >= $max_attempts) {
     echo "Too many wrong attempts. \n";
 }
} 
