<?php
class A
{
   public function A()
   {
      
    echo "I am Constructor"."<br>";

   }

}

class B extends A

{

      public function __construct()

      {

        echo parent::A();

        echo "I am Contsructor1"."<br>";


      }


      public function __destruct()

      {

        echo "Destroys object of constructor";

      }



}

$obj=new B();
?>