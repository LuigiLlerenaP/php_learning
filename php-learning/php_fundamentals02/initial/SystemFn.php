<?php
//!Functions System
//* PHP provides various system functions to perform common tasks such as string manipulation,
//* random number generation, and more.

// `strtoupper` converts all characters in a string to uppercase.
echo strtoupper("fernando") . "<br>"; // Outputs: FERNANDO

// `mb_strtoupper` is similar to `strtoupper` but handles multibyte characters (e.g., accents) correctly.
echo mb_strtoupper("Héctor") . "<br>"; // Outputs: HÉCTOR

// `rand` generates a random integer within the specified range.
echo rand(1, 10) . "<br>"; // Outputs: A random number between 1 and 10 (inclusive)

// `strlen` returns the length of a string (number of characters).
echo strlen("Luigi") . "<br>"; // Outputs: 5

// `time` returns the current Unix timestamp (number of seconds since January 1, 1970).
echo time() . "<br>"; // Outputs: Current Unix timestamp 1726641308