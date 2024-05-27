<?php

// type hinting means that the values that we send in function, we tell the function in
// starting that what should be the datatype of the values, should that be int, string
// or something else like array.

class Hi{
    function sayHi(){
        echo "Hi everyone, how are you!";
    }
}

class Bye{
    function sayBye(){
        echo "Bye everyone take good care of yourselves!";
    }
}

function wow($c){
  echo  $c->sayHi();
}

$test = new Hi();
wow($test);

echo "<br>";
echo "<br>";

// second example

class school{
    function getNames(student $names){
        foreach($names->Names() as $name){
            echo $name . "<br>";
        }
    }
}

class student{
    function Names(){
      return  ["Rimsha", "Safar"];
    }
}

$stu = new student();
$sch = new school();

$sch->getNames($stu);





?>