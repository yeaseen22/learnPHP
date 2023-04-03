<?php

class Information{
    private $name="";
    private $roll="";
    private $email="";

    protected function info(){
        echo $this->name = "tarek monjur <br>";
        echo $this->roll = "123456 <br>";
        echo $this->email = "tarek65@gmail.com <br>"
    }
}


class Result extends Information{
    private $grade = "";
    private $point = "";
    public function print (){
        $this->info();
        echo $this->grade = "A+ <br>";
        echo $this->point = "5.00 <br>";
    }
}


?>