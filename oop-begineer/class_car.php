<?php

class Car 
{
    function greeting () {
        echo "Salam", "\n" ;
    }
}

$carMethods = new Car();
$print = $carMethods->greeting();
echo $print;
?>