<?php 
 # Differences between single and double quotes in PHP
 $name = "John";
 $single_quote = 'Hello, $name! Welcome to PHP.';
 $double_quote = "Hello, $name! Welcome to PHP.";

 echo $single_quote; // Outputs: Hello, $name! Welcome to PHP.
 echo "<br>";
 echo $double_quote; // Outputs: Hello, John! Welcome to PHP. 