<?php 
$a = 5;
$b = & $a;
$b = 10;
echo $b;
echo $a;
?>