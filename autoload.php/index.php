<?php
// require "first.php";
// require "second.php";


// Define the autoload function
function myAutoloader($class) {
    require $class . ".php";
}

// Register the autoload function
spl_autoload_register('myAutoloader');

$test = new second();
echo "<br>";
$test1 = new first();
?>