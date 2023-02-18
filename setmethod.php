<?php 
class Abc
{
    private $name;

    public function __GET($property)
    {
        echo 'this is  undefined properyt of non existing property'. $property;
    }
  public function __Set($property, $value)
  {
    if (property_exists($this, $property)) {
        $this->$property = $value;
    } else {
        echo 'This is property is a  non existing property'. $property;
    }
    
  }
  public function say()
  {
    echo $this->name;
  }
}
$obj= new Abc();
$obj->name ='shashi kanta';
$obj->say();


?>