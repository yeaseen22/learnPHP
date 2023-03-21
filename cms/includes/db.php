
<?php 

$connected =  mysqli_connect('localhost', 'root', '', 'cms');

if($connected){
    echo "we are connected";
}
?>