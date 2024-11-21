<?php

// report all errors except for e_warining
error_reporting(E_ALL & ~E_WARNING);

trigger_error("examples/warining", E_USER_WARNING);



// Display errors in the browser (typically for development environments)
ini_set('display_errors', 1);

// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo "Error [$errno]: $errstr in $errfile on line $errline";
}

// Set the custom error handler
set_error_handler("customErrorHandler");

// Trigger an error
echo $undefinedVar;