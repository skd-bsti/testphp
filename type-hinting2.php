<?php 
 class shoshi
 {
    public function robi()
    {
        echo 'hello everyone from shoshi';
    }
 }
 class nishi 
 {
    public function ratri()
    {
        echo 'hello everyone from nishi';
    }
 }
  function naam(nishi $n) //type hinting (class) 
  {
    $n->ratri();
  }
$obj5 = new nishi;
naam($obj5);

?>