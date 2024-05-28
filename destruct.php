<?php
class abc{
    function __construct()
    {
        echo "This is constructor method, which is called automatically
        without using any object";
        echo "<br>";
    }

    function show(){
        echo "This is the show function, which is called
        after initiating an object and calling the function";
        echo "<br>";
    }

    function __destruct()
    {
       echo "This is a destructor function, which is also called 
        automatically, without initiating an object etc";
    }
}
$test = new abc();
// $test->show();
?>