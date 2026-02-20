<?php 

$number = 3;
$dice = 0;

do {
 $dice = rand(1, 6);
 echo "You rollet $dice 🎲!\n";

 sleep(1);

 if($dice == $number) {
  echo "You win 🎲!\n";
 }
} while ($number != $dice);