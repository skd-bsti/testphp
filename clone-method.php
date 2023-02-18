<?php 
class Students
{
    public $name;
    public $course;

    public function __construct($n)
    {
        $this->name = $n;
    }
}
class Course
{
    public $course;
    public function setCourse($c)
    {
        $this->course = $c;
    }
}

$student1 = new Students('shashi');
$student2 = clone $student1;
$student2->name = 'kanta';
echo $student1->name;
echo $student2->name;
?>