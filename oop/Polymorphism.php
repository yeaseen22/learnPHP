<?php

interface Test2{
    public function ho($what);
}

interface Test3{
    public function go($ok);
}

class Studnet implements Test2,Test3
{
    public function ho($what){
        echo $what;
    }
    public function go($ok){
        echo $ok;
    }

}

// one more example of polymorphism

interface Machine
{
    public function calStack();
}

class Circle implements Machine
{
    public $chek;
    public $hi;

    public function __construct($chek, $hi){
       $this -> check = $chek;
       $this -> check1 = $hi;
    }


    public function calStack(){
        echo $this->check * $this -> check + $this->check1;
    }
}

$check = new Circle(23, 33);
 $check->calStack();


?>