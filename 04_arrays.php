<?php

$languages = ['python', 'java', 'js', 'php'];

echo $languages[1];
echo "<br>";
// negative indexing is not supported but supported in strings

// check existence of item
echo var_dump(isset($languages[1]));
echo "<br>";

// length of array
echo count($languages);
echo "<br>";

// pushing 
$languages[] = "perl";
array_push($languages, ['go', 'react']);
echo print_r($languages);
echo "<br>";


// assosciative array 
$person = [
    'name' => 'John Doe',
    'age' => 30,
    'city' => 'New York'
];

echo $person['name'];
echo "<br>";


// array chunk
$chunkedArray = array_chunk($languages, 2);
print_r($chunkedArray);
echo "<br>";

// array_combine
$keys = ['name', 'age', 'city'];
$values = ['John Doe', 30, 'New York'];
$combinedArray = array_combine($keys, $values);
print_r($combinedArray);
echo "<br>";

// array filter

function isEven($value)
{
    return $value % 2 == 0;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$filteredArray = array_filter($numbers, 'isEven');

print_r($filteredArray);
echo "<br>";

print_r(array_values($numbers));
echo "<br>";

print_r(array_keys($numbers));
echo "<br>";