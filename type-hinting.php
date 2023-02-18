<?php 
 function fruits(array $names)
{
    foreach ($names as $name) {
        echo $name ."</br>";
    }
}
$test = ['apple', 'orange', 'banana'];
fruits($test);

?>