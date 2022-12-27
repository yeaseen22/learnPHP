
<?php

$str = '{"a":1, "b": 2, "c": 3}';

$arr = json_decode($str);

var_dump($arr->c);

// array to object
$arr2 = [1,2,3];
var_dump( (object) $arr2);

?>

