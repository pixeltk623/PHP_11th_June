<?php
abstract class abc

{
   public function test()

   {
     $a=10;
     $b=20;

     $c=$a+$b;

     echo "Additions of numbers are :".$c."<br>";
}
}
class B extends abc

{
  public function test1()
  {
    $a=20;
    $b=10;

     $c=$a-$b;

     echo "Substractions  of numbers are :".$c."<br>";
}

}

$obj=new B();
$obj->test();
$obj->test1();


?>