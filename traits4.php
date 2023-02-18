<?php 
/**
 * 
 */
trait hello
{
    private function sayhello()
    {
        echo 'hello from trait hello' . '</br>';
    }
}


class base 
{
    use hello{
        hello::sayhello as public newhello; //renamed as publlic from private and newhello from sayhello
      
    }
}
$obj = new base();

$obj->newhello();


?>