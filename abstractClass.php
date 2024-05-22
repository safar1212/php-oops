<?php

abstract class base{
    public $name;

    // protected function __construct($n)
    // {
    //     $this->name = $n;
    // }

    abstract protected function show($a);
}

class derived extends base{
    public function show($a){
        echo "hello";
    }
}

$a = new derived();

$a->show('zafar');

?>