<?php
class Students
{
    public $course;
    private $first_name;
    private $last_name;
    private $detail = ['name'=> 'shashi', 'age'=>32];
    public function setNames($fname, $lname)
    {
        $this->first_name =$fname;
        $this->last_name=$lname;
    }
    public function __isset($key)
    {
        echo isset($this->detail[$key]);
    }
}
$test = new Students();
$test->course ='PHP';

echo isset($test->name);


?>