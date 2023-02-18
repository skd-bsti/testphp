<?php 
class School
{
    public function getName(Student $names)    
    {
        echo "<ul>";
        foreach ($names->Names() as $name) {
            echo "<li>". $name . "</li>";
        }
        echo "</ul>";
    }
}
class Student
{
    public function Names()
    {
        return ['ram', 'gopal', 'krishna','robi'];
    }
}
$stu = new Student;
$sch = new School;

$sch->getName($stu);


?>