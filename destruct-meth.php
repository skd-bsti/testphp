<?php 
class abcd
{  
    public function __construct()
    {
        echo 'this is from contruct method .<br>';
    }
    public function hellow()
    {
        echo 'print from hellow method.<br>';
    }
    public function __destruct()
    {
        echo 'print from destruct method.<br>';
    }

}
$objec = new abcd();
$objec->hellow();
$objec->hellow();
$objec->hellow();



?>