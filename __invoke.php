<?php
class abc{
   public $a;
   public $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function __invoke()
    {
        echo $this->a * $this->b;
    }
}
$obj =  new abc(30,20);
$obj();
?>