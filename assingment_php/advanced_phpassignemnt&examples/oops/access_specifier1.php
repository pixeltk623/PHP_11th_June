<?php
class employee
{
   public $name="Prateek";
   protected $profile="Web PHP Developer";
   private $salry=61000;

   function show()

   {

    echo "Welcome To: ".$this->name."<br>";
    
    echo "Profile is: ".$this->profile."<br>";
    
    echo "Your salary is: ".$this->salry."<br>";
   }

}

class employee1 extends employee

{

    public function show1()
    {


    echo "Welcome To: ".$this->name."<br>";
    
    echo "Profile is: ".$this->profile."<br>";
    
    echo "Your salary is: ".$this->salry."<br>";

}

}

$obj=new employee1();

$obj->show1();



?>