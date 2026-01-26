<?php 
 // Examples of constants in PHP
 define("SITE_NAME", "W3Schools.com");
 define("MAX_USERS", 100);

 echo "Welcome to " . SITE_NAME . "!<br>";
echo "The maximum number of users allowed is " . MAX_USERS . ".<br>";

define("FOR_CONST", "This is a loop keyword, but now it's a constant!");
echo FOR_CONST; // use a non-reserved name for the constant

class MyClass {
    const PUBLIC = 'Shared'; // Valid
}

echo "<br>" . MyClass::PUBLIC;

define("CASE_INSENSITIVE_CONST", "This constant is case-insensitive");
# Case-insensitive constant name is deprecated as of PHP 7.3.0
echo "<br>" . CASE_INSENSITIVE_CONST;