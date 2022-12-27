


<?php 

// =========== checking data type using var_dump php building function   ==============
$foo = 1;
echo var_dump($foo);


$large_number = 2147483647;

var_dump($large_number);


// =========== Using the short array snytax  =============
$array = ["foo" => "bar",
          "bar" => "foo"
];

// ========== Indexed arrays without key  ==========
$array2 = array("foo", "bar", "hello", "world");
var_dump($array2);

?>