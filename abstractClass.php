<?php

abstract class base{
    public $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    abstract protected function show();
}

class derived extends base{
    public function show(){
        // echo $a;
        echo $this->name;
    }
}


$a = new derived("zafar");
$a->show();

// second example

abstract class base1{
    public $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    abstract protected function show1($n);
}

class derived1 extends base1{
    public function show1($a){
        // echo $a;
        echo $a;
    }
}

// $a = new derived("zafar");
// $a->show();
$a = new derived1("zafar");
$a->show1("Hello" . $a->name);

?>