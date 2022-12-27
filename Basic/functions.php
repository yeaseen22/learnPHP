<?php

function registerUser($email){
    echo $email . 'User Register' . "\n";
};


registerUser('brad');

function sum($a = 12, $b = 2){
    return $a + $b . "\n";
}

$ansOfSum = sum();
echo $ansOfSum;

// anonymous function
$substract = function ($n1, $n2){
    return $n1 + $n2 . "\n";
};

echo $substract(2,3);


// arrow function 
$multiply = fn($a, $b) => $a + $b;

echo $multiply(2,5);