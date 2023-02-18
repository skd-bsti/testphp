<?php

$weekday= 0;
switch($weekday){
    case 1:
        echo "today is sunday";
        break;
    case 2:
        echo "today is monday";
        break;
    case 3:
        echo "today is tuesday";
        break;
    case 4:
        echo "today is wednesday";
        break;
    case 5:
        echo "today is thursday";
        break;
    case 6:
        echo "today is friday";
        break;
    case 7:
        echo "today is saturday";
        break;  
        default:
            echo "tell the valid day";
         
            break;                            
}

$myAge= 12;
switch(true){
    case($myAge >= 12 && $myAge <=15):
        echo " you are not eligible to vote";
        break;
    case($myAge >= 15 && $myAge <=18):
        echo " you are eligible to vote";
        break;
        

}
?>