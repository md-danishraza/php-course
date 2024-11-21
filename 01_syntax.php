<?php

echo "hello";
print("hello");


// assign variables by value
$a = 10;
$b = $a;

echo "a = $a, b = $b\n";
print("<br>");
// assgin variables by reference

$c = &$a;
$c = 20;
echo "a = $a, b = $b, c = $c\n";
print("<br>");

// concatenation

$str1 = "Hello";
$str2 = "World!";

echo $str1 . " " . $str2 . "\n";
print("<br>");
echo "Hello $str2";