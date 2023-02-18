<?php 

// class properties ==
// variables hold object values
//also called attributes, class variables, instance variables
//define with var keyword followed by the $variable_name
//can set an initial value


//functions of properties
//get_class_vars($string) 
//get_object_vars($object)
//property_exists($mixed, $string)
class Student{
  var $first_name;
  var $last_name;
  var $country = 'none';

}

$student1 = new Student;
$student1->first_name = 'lucky';
$student1->last_name = 'anderson';

$student2 = new Student;
$student2->first_name = 'mucky';
$student2->last_name = 'mnderson';

echo $student1->first_name . " " . $student1->last_name . "</br>";

echo $student2->first_name . " " . $student2->last_name . "</br>";

$class_vars = get_class_vars('Student');
echo 'class vars : <br/>';
echo "<pre>";            //for showing in associative array style
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);
echo 'object vars : <br/>';
echo "<pre>";
print_r($object_vars);
echo "</pre>";


if (property_exists('Student', 'first_name')) {
  echo "property first_name exists in class Student";
} else {
  echo "property first_name does not exists in class Student";
}
?>