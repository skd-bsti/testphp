<?php 

// class methods ==
// functions to perform object actions
//Non oop : 'functions' ; OOP :"methods";
//define inside classes like regular function
//parenthesis is required , even if there is no arguments
//if you see the arrow notation followed by a parenthesis, we know its call to a method
//if there is no parenthesis, then we know its a call to a property. very very imporatant thing.


//functions for methods
//get_class_methods($mixed) 
//method_exists($mixed, $string)
class Student{
  var $first_name;
  var $last_name;
  var $country = 'none';


  function say_hello()
  {
    return 'hello world!';
  }

}

$student1 = new Student;
$student1->first_name = 'lucky';
$student1->last_name = 'anderson';

$student2 = new Student;
$student2->first_name = 'mucky';
$student2->last_name = 'mnderson';

echo $student1->first_name . " " . $student1->last_name . "</br>";

echo $student2->first_name . " " . $student2->last_name . "</br>";



echo $student1->say_hello() .  "</br>";
echo $student2->say_hello() .  "</br>";



$class_methods = get_class_methods('Student');
echo 'class methods :' . implode(',', $class_methods).'<br/>';

print_r($class_methods);



if (method_exists('Student', 'say_hello')) {
  echo "method say_hello() exists in class Student";
} else {
  echo "method say_hello() does not exists in class Student";
}
?>