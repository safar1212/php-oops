<?php
class student{
    public $name;
    public $course;

    public function __construct($n)
    {
        $this->name = $n;
    }
    public function setCourse(course $c){
        $this->course = $c;
    }
    public function __clone()
    {
        $this->course = clone $this->course;
    }

}

class course{
   public $cname;

    function __construct($cn){
        $this->cname = $cn;
    }
}

$student1 = new student("Zafar");

// echo $student1->name;
// print_r($student1);
echo "<br>";
// echo $student2->name;
echo "<br>";
$course1 = new course("php");

// echo $course1->cname;
$student1->setCourse($course1);
// $student2->name = "Ali";

$student2 = clone $student1;
$student2->name = "Ali";
$student2->course->cname = "python";

// $student2->setCourse("Phython");
print_r($student1);
echo "<br>";
print_r($student2);



?>