<?php 
class base 
{
    protected static $name = 'yahoo';
    public static function show()
    {
        echo self::$name;
        echo "</br>";
        echo static::$name;
    }

}
class derived extends base
{
    protected static $name = 'baba';
}

$obj = new derived();
$obj->show();
?>