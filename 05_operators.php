<?php

// error control opertor @
// not recommended
$read = @file("sfsd.txt");



// increment post and pre
$x = 5;
echo ++$x;
echo "<br>";

// array operator
$array1 = ["a","b","c","d","e","f","g","h"];

$array2 = ["a","b","c","d","e","f"];
print_r($array1 + $array2);
echo $array1==$array2;
