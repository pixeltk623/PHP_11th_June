<?php
//new definded any object

class name

{
   public $name="My name is Brijesh Pandey";
   public function display()

   {

    echo $this->name;

   }
}
$obj=new name(); //new name() is an object of class name
$obj->display();

?>