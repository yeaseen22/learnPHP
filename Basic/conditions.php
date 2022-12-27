<?php



$age = 20;

if ($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'Sorry you are not old enough to vote';
}

$t = date("H");

if ($t < 15) {
    echo 'Good Morning';
} else if ($t < 17) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}


// ternary operatore for condition checking
$post = ['First Post'];

echo !empty($post) ? $post[0] : 'No Post';
echo $post[0] ?? null; 


$fav_color = 'red';

switch($fav_color){
    case 'red':
        echo 'Your Favorite color is red';
        break;
    case 'blue':
        echo 'Your color is blue';
        break;
    default: 
        echo 'Your favorite is not red, or blue';
}

