<?php

//! Flow of Control
//* In PHP, the flow of control is top-to-bottom. 
//* You can alter this flow using control structures like `if`.
//* The `if` statement executes a block of code if the condition is true.
//* The `else` statement executes a block of code if the `if` condition is false.
//* The `elseif` statement is used to check multiple conditions.

$age = 18;

if ($age == 18 || $age < 18) {
    echo "You are an adult.<br>";
}

//// Example 2: `if`-`else` statement
$fruit = "apple";
if ($fruit === "apple") {
    echo "It's an apple.<br>";
} else {
    echo "It's some other fruit except apple.<br>";
}

//// Example 3: `if`-`elseif`-`else` statement
$weekDay = "Monday";

if ($weekDay === "Monday") {
    echo "You are working for two days.<br>";
} elseif ($weekDay === "Thursday") {
    echo "You are working for three days.<br>";
} elseif ($weekDay === "Friday") {
    echo "You are working for four days.<br>";
} else {
    echo "It's the weekend.<br>";
}

//!Switch
//* `switch` is a control structure that evaluates an expression 
//* and executes the code block corresponding to the value of the expression.

$month = 5;
switch ($month) {
    case 1:
    case 2:
    case 12:
        echo "It's Winter <br> ";
        break;
    case 3:
    case 4:
    case 5:
        echo "It's Spring <br>";
        break;
    case 6:
    case 7:
    case 8:
        echo "It's Summer <br>";
        break;
    case 9:
    case 10:
    case 11:
        echo "It's Fall <br>";
        break;
    default:
        echo "Invalid month<br>";
}
//////////////////////////////////
$day = 3;

switch ($day) {
    case 1:
        echo "Monday<br>";
        break;
    case 2:
        echo "Tuesday<br>";
        break;
    case 3:
        echo "Wednesday<br>";
        break;
    case 4:
        echo "Thursday<br>";
        break;
    case 5:
        echo "Friday<br>";
        break;
    case 6:
        echo "Saturday<br>";
        break;
    case 7:
        echo "Sunday<br>";
        break;
    default:
        echo "Invalid day<br>";
}

$number = 11;

switch (true) {
    case ($number > 0 && $number <= 5):
        echo "Número es mayor que 0 y menor o igual a 5.<br>";
        break;
    case ($number > 5 && $number <= 10):
        echo "Número es mayor que 5 y menor o igual a 10.<br>";
        break;
    case ($number > 10):
        echo "Número es mayor que 10.<br>";
        break;
    default:
        echo "Número fuera de los rangos definidos.<br>";
}

//!Ternary
//* The ternary operator is a shorthand for `if-else` statements used to assign a value based on a condition.
//* Syntax: $variable = (condition) ? value_if_true : value_if_false;
$isGreat = (9 > 2) ? true : false;
echo ($isGreat) ? "Great" : "Not great";


//! For
//* The `for` loop is used to iterate over a block of code a specific number of times
//* when the number of iterations is known.
//* Syntax: 
//* for (initialization; condition; increment/decrement) {
//*     // code to be executed
//* }

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}


for ($i = 0; $i < 30; $i++) {
    if ($i % 2 == 0) {

        echo "It's even: " . $i . "<br>";
    } else {

        echo "It's odd: " . $i . "<br>";
    }
}


//* continue; -> Skip the rest of the loop body for this iteration
//*   break; ->  Exit the loop
for ($i = 0; $i < 30; $i++) {

    if ($i % 2 == 0) {
        continue;
    }
    echo "Odd number: " . $i . "<br>";

    if ($i >= 15) {
        break;
    }
}


//! While
//* The `while` loop is used to iterate over a block of code as long as a condition is true.
//* It checks the condition before executing the code block.
//* Syntax: 
//* while (condition) {
//*     // code to be executed
//* }

$i = 0;
while ($i < 10) {
    echo $i . "<br>"; // Print the current value of $i
    $i++; // Increment $i by 1
}

// ! Do-While
//* The `do-while` loop is used to iterate over a block of code at least once and then continue
//* as long as a condition is true.
//* It checks the condition after executing the code block.
//* Syntax: 
//* do {
//*     // code to be executed
//* } while (condition);

$a = 0;
do {
    $a++; // Increment $a by 1
} while ($a <= 10); // Continue the loop while $a is less than or equal to 10


//! Functions
//* Functions are blocks of code designed to perform specific tasks 
//* and can be reused throughout the code.
//* They help organize code by grouping related instructions into a single unit 
//* that can be called with parameters and return a result.
//* Syntax:
//* function functionName($parameter1, $parameter2) {
//*     // code to execute
//*     return $result; // Optional: Return a value
//* }

function sum(int $numA, int $numB): int
{
    return $numA + $numB;
}

echo sum(5, 4) . "<br>"; // Outputs: 9

//! Arrow function  
//* Syntax: fn($parameter) => $expression;
//* Arrow functions are a more concise way to define functions that consist of a single expression.
//* They automatically capture variables from the outer scope by value.
$greet = fn(string $fullName): string => "Hello, $fullName";
echo $greet("Ana"); // Outputs: Hello, Ana
