<?php
class abc{
    public $name = "Rimsha";
    private $fname;
    private $lname;

    function setName($f,$l){
        $this->fname = $f;
        $this->lname = $l;
    }

    function __sleep()
    {
        return array("name", "fname");
    }
}
$test = new abc();
$test->setName("Zafar", "Ali");

$srl = serialize($test);

echo $srl;
?>