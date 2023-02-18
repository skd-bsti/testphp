<?php 
class base 
{
    public static $name = 'yahoo baba';
    public static function show()
    {
        echo self::$name;
    }

}
base::$name;
base::show();

?>