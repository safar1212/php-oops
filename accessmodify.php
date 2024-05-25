<?php

class name{
    private $name;

    function __construct($n = 'ali')
    {
        $this->name = $n;
    }

   protected function show() {
        echo "Your name is " . $this->name;
    }
}

class access extends name{
    function get() {
        echo "Your name is " . $this->name;
    }
}

$first = new access('zafar');

$first->get();

?>