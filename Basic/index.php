
<!-- 
<script>

    var a = 10;


// associative array
a = [];
a['name'] = 10;
a['sn'] = 20;

console.log(a['name']);

</script> -->




// $a = 20;
// $b = 10;
// $c = $a + $b;

// echo("Result is= ". $c);

// $a = [];
// $a['name'] = '';
// $a['email'] = 'majid@gmail.com';

// echo $a['name'];



<!Doctype html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php

if(isset($_POST['btn'])){
    $a = $_POST['name'];
    $b = $_POST['email'];
    echo $a;
}

?>

<form method="POST">
<input type="text" name="name">
<input type="text" name="email">
<button>Ok</button>

</form>

</body>
</html>






