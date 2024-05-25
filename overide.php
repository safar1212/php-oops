<?php

class base{
   public $name = 'base class';

   function add($a, $b) {
    echo "The multiplication in base class becomes " . $a * $b;
   }
}

class derived extends base{
   public $name = 'derived class';

   function add($a, $b) {
    echo "The addition in derived class becomes " . $a + $b;
   }

}

$newVariable = new derived();

echo $newVariable->name; "/n";

$variableOne = new derived();

$variableOne->add(10,10);



?>