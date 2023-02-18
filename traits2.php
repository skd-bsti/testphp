<?php 
 // priority label in method overriding=> 1. child class > 2. trait > 3. base/ parent class
trait shishir
{
    public function sayHello()
    {
        echo "print hello from trait \n";
    }
}
    Class base
    {
        public function sayHello()
        {
            echo 'print from  base class \n';
        }
       
        
    }
    class child extends base
    {
        use shishir;
        public function sayHello()
        {
            echo 'print from  child class \n';
        }
    }

$obj = new child();
$obj->sayHello();
    




?>