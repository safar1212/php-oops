<?php

abstract class A {
    protected $name;

    // Uncomment the constructor
    public function __construct($n) {
        $this->name = $n;
    }

    abstract protected function show($name);

    // Getter method for name
    // protected function getName() {
    //     return $this->name;
    // }
}

class B extends A {
    // Add a constructor to call the parent constructor
    public function __construct($n) {
        parent::__construct($n); // Call parent constructor
    }

    public function show($a) {
        echo $a;
    }
}

// Example usage
$b = new B('Example Name');
$b->show(); // Use the getter method to access the protected property
?>
