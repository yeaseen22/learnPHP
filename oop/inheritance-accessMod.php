
<?php

class Student{

    public static $name = 50;
    const Roll = 45;

    // public function __construct($name){
    //     $this->name = $name;
    // }

    public static function test (){

        // for accessing any value outside of object

        // $this->name;
        // echo Student::Roll;
        // echo self::Roll;

        echo  'My name is : ' . self::$name;
    }

}

// create student class instant
class Mark extends Student 
{
    public $roll;

    public static function test() {
        echo  ' My name is : ' . self::$name . ' My roll are : ' . self::Roll;
    }
}

class Test extends Mark{
    
}



// object static work
Student::test();


// $std = new Student('Arif'); 
// $std->test();

echo"\n";
// echo '<br>';
//  echo $std->name;
// echo $std;
// echo Student::Roll;

// $mark = new Mark('Yeaseen');

// $mark->roll = 101;
// $mark->test();

print("\n");

// either mark inherite student
// if($mark instanceof Student){
//     echo "Yes";
// }
// return "No";

