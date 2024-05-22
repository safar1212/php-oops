<?php

class calcul{
   public $a , $b , $c;

   function __construct($a = 50, $b = 35, $c = 50){
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
   }

   function sum(){
        $this->c = $this->a + $this->b;
        echo "The sum of A and B becomes" . $this->c . "<br>";
    }

    function sub() {
        $this->c =  $this->a - $this->b;
        echo "The subtraction of A and B becomes" . $this->c . "<br>";
    }
};

class division extends calcul{
    function sum(){
        $this->c = $this->a + $this->b;
        echo "The sum of A and B becomes " . $this->c . "<br>";
    }
}

$firstCalculObject = new division();
$firstCalculObject->sum(); 

?>