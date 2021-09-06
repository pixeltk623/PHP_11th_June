<?php
class abc

{   

    public function test()
    {

        $name="My name is : Brijesh";
        echo $name."<br>";
    }


}

class cba extends abc

{
   public function test1()

   {

    $name1="My name is : Prateek";

    echo $name1;
   }


}


$obj=new cba();
$obj->test();
$obj->test1();


?>