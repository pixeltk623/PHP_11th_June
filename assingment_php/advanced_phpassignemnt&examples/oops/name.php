<?php
class demo
{
     private $name="My name is Bhavika";
   
     public function display()
     {

        echo $this->name;

     }

     
}

$obj=new demo();
$obj->display();
echo var_dump($obj);


?>