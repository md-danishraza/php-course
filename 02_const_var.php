<?php

// define keyword created constant at run time
define('constvar', 'fixed');

// const keyword created constant at compule time

// check exist or not
echo defined('constvar');
echo constvar;
print("<br>");


// predefined constant
echo PHP_VERSION;
print("<br>");

// magic constant
echo __FILE__;
echo __LINE__;
print("<br>");

// variable variables

$var = 'test';
// use value of var as keyword
$$var = 'value';

echo $$var, $test ; // output: value
print("<br>");