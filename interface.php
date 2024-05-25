<?php

interface parent1{

    function calc($a,$b);
}

interface parent2{
    function sub($c, $d);
}

class childClass implements parent1, parent2{
    function calc($w, $x){
        echo "The additions are " . $w + $x;
    }

    function sub($y, $z){
        echo "The subtrations are " . $y - $z;
    }
}

$test1 = new childClass();

$test1->calc(10,10);
echo "<br>";

$test2 = new childClass();

$test2->sub(10,10);



?>