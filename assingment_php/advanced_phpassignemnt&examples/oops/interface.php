<?php
interface a
{
  
    public function test();

}

interface b
{
  
    public function test1();

}

interface c
{
  
    public function test2();

}

class name implements a,b,c
{
   
    public function test()

    {
        echo $name="My name is Brijesh"."<br>";
    }

    
    public function test1()

    {
        echo $name="My name is Prateek"."<br>";
    }

    
    public function test2()

    {
        echo $name="My name is Bhavika"."<br>";
    }


}

$obj=new name();
$obj->test();
$obj->test1();
$obj->test2();


?>