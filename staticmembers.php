<?php

class base{
static $name = "Zafar";
static function show(){
 echo self::$name;
}

}

// echo base::$name;
// echo "<br>";
// no need to start an object for static members
 base::show();
 echo "<br>";

// second example

 class base1{
   static $name1 = "Hello";
    function __construct($n)
    {
        self::$name1 = $n;
    }

   static function show1(){
        echo self::$name1;
    }
 }

 $test = new base1("wow");
 $test->show1();
 echo "<br>";

// third example

class base2{
    static $name2 = "Zafar Ali";
}

class derived extends base2{
    static function show2(){
        echo parent::$name2;
    }
}

$test2 = new derived();
$test2->show2();


?>