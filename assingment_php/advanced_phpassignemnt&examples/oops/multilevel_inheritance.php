<?php
class a
{
   public function test()
   {
       $name="Brijesh";
       echo $name."<br>";
   }

}

class b extends a
{
   public function test1()
   {
       $name1="Meet";
       echo $name1."<br>";
   }

}

class c extends b
{
   public function test2()
   {
       $name2="Prateek";
       echo $name2."<br>";
   }

}


class d extends c
{
   public function test3()
   {
       $name3="Bhavika";
       echo $name3."<br>";
   }

}

$obj=new d();
$obj->test();
$obj->test1();
$obj->test2();
$obj->test3();
?>