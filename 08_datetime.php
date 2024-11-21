<?php


echo date_default_timezone_get();

echo "<br>";
date_default_timezone_set("Indian/Christmas");


echo "<br>";
echo time();

echo "<br>";
echo date("m/d/y g:ia");


// one day after 
echo "<br>";
echo date("m/d/y g:ia", time() + 24 * 60 * 60);