<?php

// strict 
declare(strict_types=1);

function sum(int $a, int $b)
{
    return $a + $b;
}

echo sum(5, 5);

echo "<br>";


// echo sum("5", 5);

// returning specific dtype 
function test(): int|float
{
    return 1;
}
function test2(): void
{
    return;
}


// passing value by reference
function mul(int &$a, int &$b)
{
    return $a + $b;
}

echo sum(5, 5);

echo "<br>";


// args = splat
function splat(...$numbers)
{
    return array_sum($numbers);
}
$numbers = splat(3, 34, 3, 534, 453);
print_r($numbers);
echo "<br>";


// accessing gloabl variable

$globalVar = "Hello";

function accessGlobalVar()
{
    // refernce
    global $globalVar;
    echo $globalVar;
}
accessGlobalVar();
echo "<br>";
echo "<br>";
echo "<br>";


// anonymous function
function greet()
{
    echo "Hello World!";
    return "Hello ";
}
$x = greet();
// echo $x;

echo "<br>";
echo "<br>";


$greetAnon = function () use ($globalVar) {
    echo "Hello World!";
    echo $globalVar;
    // return "Hello ";
};
$greetAnon();
echo "<br>";
echo "<br>";


// arrow functions 

$array = [1, 2, 3, 4];

$array2 = array_map(fn($x) => $x * $x, $array);

print_r($array2);


