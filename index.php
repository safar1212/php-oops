<?php

class calcul{
   public $a , $b , $c;

   function __construct($a = 50, $b = 30, $c = 50){
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
    // public $d;
    // function __construct($d)
    // {
    //     $this->d = $d;
    // }

    function sum() {
        // $this->d = $this->a + $this->b;
        // echo "this division of A and B becomes " . $this->d . "<b>";
        echo $this->a;
        echo $this->b;
    }
}

$firstCalculObject = new calcul(50, 20);
$firstDivisionObject = new division(50,50);


$firstDivisionObject->sum();


//  $firstCalculObject->sum(); 

?>