<?php

//* Basic Types
//// In PHP, we have basic types such as integers, floats, strings, booleans, and null.
$number = 1; // Integer
echo "The type of \$number is: " . gettype($number) . "<br>";

$decimal = 2.21; // Float
echo "The type of \$decimal is: " . gettype($decimal) . "<br>";

$fullName = "It's a string"; // String
echo "The type of \$fullName is: " . gettype($fullName) . "<br>";

$isBoolean = false; // Boolean
echo "The type of \$isBoolean is: " . gettype($isBoolean) . "<br>";

$empty = null; // Null
echo "The type of \$empty is: " . gettype($empty) . "<br>";

//* Casting
//// To convert a variable to a different type, use (type)$variable
$intValue = (int) $decimal; // Cast float to integer
echo "Casting \$decimal to integer gives: " . $intValue . "<br>";

$floatValue = (float) $number; // Cast integer to float
echo "Casting \$number to float gives: " . $floatValue . "<br>";

$stringValue = (string) $isBoolean; // Cast boolean to string
echo "Casting \$isBoolean to string gives: " . $stringValue . "<br>";
