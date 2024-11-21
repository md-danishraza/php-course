<?php

// inclue = will not show error if file not found
// its returns 1 on success and 0 on failure
include 'index.php';
echo "will print";


// require = will halt the code
require 'index.php';
echo "will not print";


// require_once and include_once will import the file only once 
