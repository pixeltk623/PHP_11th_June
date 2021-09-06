<?php
//public 
//private
//protected
class A
{ 

    protected $a=10;
    protected $b=20;
  
    function add()

    {

        echo $sum=$this->a+$this->b."<br>";

    }

}

class B extends A
{

    function sub()
    {
        echo $sub=$this->a-$this->b;
    }
}


$obj=new B();
$obj->add();
$obj->sub();


?>