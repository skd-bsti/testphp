<?php 

// class  refer to instances 
// functions to perform object actions


//functions for methods
//get_class_methods($mixed) 
//method_exists($mixed, $string)
class Person{
  var $first_name;
  var $last_name;
  

  function full_name()
  {
    return $first_name ."  " . $last_name;// notice $first_name and $last_name are undefined variable.
  }

}
$p = new Person();
$p->first_name = 'jack';
$p->last_name = 'dowson';
echo $p->full_name();

//outside the class : $variable->
//inside the class  : $this-> 
//this instance , go and get either its property or methods can be reused for absolutely anything.
//its just a way to refer to this current instance

class Customer{
  public $firstName;
  public $lastName;
  

  function fullName()
  {
    return $this->firstName ."  " . $this->lastName;
    // notice $firstName and $lastName are inside the method so use $this keyword, and no error is showing
  }

}
$cust = new Customer();
$cust->firstName = 'jackeline';
$cust->lastName = 'brown';
echo $cust->fullName();

?>