
<?php

// for($x=0; $x < 10; $x++){
//     echo "Number is $x";
// }

//  $x=1;
//  while($x <= 15){
//     echo 'Number ' . $x . '<br>';
//     $x++;
//  }
// $x=1;
// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while($x <= 5);

/***    Foreach loop    ***/

$post = ['First Post', 'Second Post', 'Third Post'];

// for($x = 0; $x < count ($post); $x++){
//     echo $post[$x]. '<br>';
// }

// foreach($post as $posts){
//     echo $posts . '<br>';
// }

foreach($post as $index => $posts){
    echo $index . ' - ' . $posts . '<br>';
}

$person = [
    'First_name' => 'Brad',
    'Last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

foreach($person as $key => $value){
    echo "$key - $value <br>";
}




