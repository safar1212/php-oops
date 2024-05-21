<?php

class calcul{
   public $a , $b , $c;

   function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub() {
        $this->c =  $this->a + $this->b;
        return $this->c;
    }
};

$firstCalculObject = new calcul();

$firstCalculObject->a = 10;
$firstCalculObject->b = 20;

echo $firstCalculObject->sum();



?>