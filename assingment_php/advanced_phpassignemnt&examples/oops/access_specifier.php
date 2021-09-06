<?php
//public 
//private
//protected

class A

{
    public $name="My name is Brijesh";

    public function display()
    {
        echo $this->name."<br>";
    } 



}

class B extends A

{
     public function display1()

     {
       
         echo "My name is Rajesh";

     }

}

$obj=new B();
$obj->display();
$obj->display1();



?>