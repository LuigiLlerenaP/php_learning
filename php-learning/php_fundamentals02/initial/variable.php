<?php
//* In PHP, variables are created using the dollar sign ($) followed by the variable name.
$firstName = "Luigi";

//* Variable names cannot start with numbers or special characters (except underscores).
//// Example of invalid variable: $1234 = "not possible";

//* Variable names can include underscores
$_test = "Test";
$_testTwo = 22;
echo "$_test<br>" . "$_testTwo<br>";
// PHP allows different data types to be assigned to the same variable, but it's generally recommended to explicitly declare data types for better readability and maintainability.
$age = (int)25; // Integer

// PHP is weakly typed, meaning variables can change types. However, it's often good practice to avoid unnecessary type conversions for clarity.
$fullName = "Luigi Llerena";
// $fullName = 44; // Avoid changing the type if not necessary

// You can print or show something using echo and concatenate strings using a dot (.).
echo "Hello, $firstName. You are $age years old and your full name is $fullName. Have a nice day!";
