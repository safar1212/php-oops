<?php
class abc{
    public $name = "Rimsha";
    private $fname;
    private $lname;

    public function setName($f, $l){
       $this->fname = $f;
       $this->lname = $l;
    }

    function __unset($prop){
       unset($this->$prop);
    }
}

$test = new abc();
// unset($test->name);
// echo $test->name;
$test->setName("Zafar", "Ali");
unset($test->fname);
print_r($test);
?>