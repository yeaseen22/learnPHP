<?php



/**** $_GET & $_POST Superglobals ****/

/**
 * we can pass data through urls and froms using the $_GET and $_POST superglobals
 * ***/


// if(isset($_POST['submit'])){
//  echo $_POST['name'];
//  echo $_POST['age'];
// }

// if(isset($_POST['submit'])){
//     $name = htmlspecialchars($_POST['name']);
//     $age = htmlspecialchars( $_POST['age']);

//     echo $name;
//    }

if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
     $_POST['age'];
   }

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name='name'>
    </div>
    <div>
        <label for="age">AGE: </label>
        <input type="number" name='age'>
    </div>
    <input type="submit" value="Submit" name="submit">

</form>



