<?php 
/**
 * 
 */
trait shashi
{
    public function sayHello()
    {
        echo "hello Every One" . "</br>";
    }

    public function sayHi()
    {
        echo "hi Every One" . "</br>";
    }
}
trait robi
{
    public function sayBye()
    {
        echo "Bye Bye Every One" . "</br>";
    }
}
class A
{
    use shashi, robi;
}
class B
{
    use shashi, robi;
}
class C
{
    use shashi, robi;
}

$obj = new A;
$obj->sayHello();
$obj->sayBye();
$obj->sayHi();


$obj1 = new B;
$obj1->sayHello();
$obj1->sayBye();
$obj1->sayHi();

$obj2 = new C;
$obj2->sayHello();
$obj2->sayBye();
$obj2->sayHi();

?>