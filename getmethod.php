<?php 
class Abc
{
    private $data=['name'=>'shashi', 'age'=>32, 'country'=>'bangladesh'];

    public function __GET($key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }else {
            echo 'this'. $key.'is not defined';
        }
    }
  
}
$obj= new Abc();
echo $obj->name;


?>