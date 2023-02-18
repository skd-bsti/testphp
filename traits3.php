<?php 
/**
 * 
 */
trait hello
{
    public function sayhello()
    {
        echo 'hello from trait hello' . '</br>';
    }
}
/**
 * 
 */
trait hi
{
    public function sayhello()
    {
        echo 'hello from hi trait' . '</br>';
    }
}

class base 
{
    use hello, hi{
        hello::sayhello insteadof hi; //set priority hello trait to hi trait
        hi::sayhello as newhello; //renamed as newhello from sayhello
    }
}
$obj = new base();

$obj->sayhello();
$obj->newhello();

?>