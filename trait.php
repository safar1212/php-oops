<?php

trait greet{
    function hello(){
        echo "Hello everyone";
        echo "<br>";
    }

    function How(){
        echo "How are you";
        echo "<br>";
    }
}

trait bye{
    function byebye(){
        echo "Bye Bye everyone";
    }
}

class base{
    use greet, bye;
}

$test = new base();
$test->hello();
$test->How();
$test->byebye();

echo "<br>";
echo "<br>";

// In trait method overwrting. If I have a trait with a function "A".
// than I have a class base with a function "A". Than I have a derived class
// in which I derive the base class. and also has a function "A".
//  than as per priority, the first priority will be given to function of the same
// class, than second priority will be given to function of trait. And lastly, 
// priority will be given, which is derived in the derived class.
// scope resolution operator

// next example

trait sayHello{
    function Hi(){
        echo "Hellor for sayHello trait";
    }
}

trait sayHi{
    function Hi(){
        echo "Hellor for sayHi trait";
    }
}

class base22{
    use sayHello, sayHi{
        sayHello::Hi insteadOf sayHi;
        sayHi:: Hi as HiFromSayHiTrait;
    }
}
$test22 = new base22();
$test22->Hi();
echo "<br>";
$test22->HiFromSayHiTrait();

?>