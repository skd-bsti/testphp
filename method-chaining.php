<?php 
class abc
{
    public function first()
    {
        echo 'this is from first method .<br>';
        return $this;
    }
    public function second()
    {
        echo 'this is from second method.<br>';
        return $this;
    }
    public function third()
    {
        echo 'this is from third method.<br>';
    }
}
$obje = new abc;
$obje->first()->second()->third();
?>