<?php
// scalar dtype = bool, string, int, float

$string = "Hello, World!";
echo $string;
echo "<br>";


$score = 50;
echo $score;
echo "<br>";

$decimal = .5;
echo $decimal;
echo "<br>";

$confirm = false;
echo $confirm;
echo "<br>";




// compound dtypes = array , objects, callable , iterable 
$array = array("apple", "banana", "cherry");
print_r($array);
echo var_dump($array);


// type coercion
echo (int) "15";



// special dtypes = null, resources
$name = null;
echo $name;
echo "<br>";


// strings manipulation
$firstname = "danish";
$lastname = "raza";
$name = $firstname . " " . $lastname;
echo "my name is $name";
echo "<br>";


// heredoc
// double quoted sting 
echo "<br>";
$text = <<<TEXT
    This is a multiline string.
    It can contain variables.
    $name
TEXT;
echo nl2br($text);

// nowdoc 
// multi-line string that doesn't contain variables

echo "<br>";
$text = <<<'TEXT'
    This is a multiline string.
    It can contain variables.
    $name
TEXT;
echo nl2br($text);


