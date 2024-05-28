<?php
class abc{
    public $course = "php";
     private $fname;
     private $lname;

    public function setName($f, $l){
        $this->fname = $f;
        $this->lname = $l;
     }

     function __isset($prop)
     {
        echo isset($this->$prop);
     }


}
$test = new abc();
// echo isset($test->course);
$test->setName("Zafar", "Ali");
isset($test->fname);


?>