<?php
//public 
//private
//protected

class A

{
    private $name="My name is Brijesh";

    private function display()
    {
        echo $this->name."<br>";
    } 



}

class B extends A

{
     function display1()

     {
       
         echo "My name is Rajesh";

     }

}

$obj=new B();
$obj->display();
$obj->display1();



?>