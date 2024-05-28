<?php
class abc{
    private $name;

    private function set($n){
      $this->name = $n;
    }

     function __call($method, $arguments)
    {
        echo "The method you're tring to set value in, doesn't exist
        or is a private method : $method";
    }
}
$test = new abc();
$test->set("Ali");
echo "<br>";
echo "<br>";

// second example:

class cd{
    private $firstName;
    private $lastName;

    private function setNames($fname, $lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }

    function __call($method, $argu){
      if(method_exists($this, $method)){
        call_user_func_array([$this, $method], $argu);
      } else{
        echo "The method doesn't exist : $method";
      }
    }
}

$test2 = new cd();
$test2->setNames("zafar", "Ali");
print_r($test2);

?>