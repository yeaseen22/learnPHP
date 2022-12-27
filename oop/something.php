<?php

require_once 'index.php';

// $test =  new Index();

// echo $test->sum(23, 44);

// // sum(4, 18);

// $hi =  new Index();


class Fruit {
    public $name;
    public $color;

    // use constructor 
    function __constructor($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        $this->name;
    }

    function set_name(){
        return $this->name;
    }
}

$ans = new Fruit('Hello', 'red');
$ans->get_name();
echo '<br>';

echo $ans->set_name();

// You can use the instanceof keyword to check if an object belongs to a specific class:

    
// $ans = new Fruit();
var_dump($ans instanceof Fruit);



// Destructor function in php
// As constructors and destructors helps reducing the amount of code, they are very useful!
class Fruit2
{
    public $name;
    public $color;

    function __constructor($name){
        $this->name = $name;
    }
    function __destructor(){
        echo "the fruit is {$this->name}.";
    }
}

$destru = new Fruit2('Yeaseen');


// constants
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();
  ?>

?>


