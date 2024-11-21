<?php

$dir = scandir(__DIR__);

// var_dump($dir);


// mkdir("foo");
// rmdir("foo");


// if (file_exists("foo.txt")) {
//     echo filesize("foo.txt");
// } else {
//     echo "file not found";
// }


// reading
// if (!file_exists("foo.txt")) {
//     echo "file not found";
//     return;
// }
// $file = fopen("foo.txt", "r");
// while (($line = fgets($file)) !== false) {
//     echo $line . "<br>";
// }
// fclose($file);


// $content = file_get_contents("foo.txt");
// echo $content;

// file_put_contents("foo.txt", "by world", FILE_APPEND);


// delete a file
unlink("foo.txt");