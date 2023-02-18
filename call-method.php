<?php 
class Students
{
    private $first_name = $fname;
    private $last_name = $lname;
    private function setNames($fname, $lname)
    {
        $this->first_name = $fname;
        $this->first_name = $lname;
    }
    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        
    } else {
        echo "Method doesnot exists: $method";
    }
    
        echo "you are trying to undefined or non existing method";
    }

}
$test = new Students();
$test->setNames('shashi', 'kanta');

echo '<pre>';
print_r($test);
echo '</pre>';
?>