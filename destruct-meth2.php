<?php 
class abcd
{
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect();
    }
    public function insert()
    {
        echo 'print from hellow method.<br>';
    }
    public function __destruct()
    {
        mysqli_close($this->conn);
    }

}
$objec = new abcd();
$objec->insert();




?>