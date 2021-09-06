<?php
class name
{
  
  public static $value="My name is Brijesh";
  public function display()

  {

     return self::$value;


  }

}

$obj=new name();
echo $obj->display();




?>