<?php
class abc
{
    public $a=10;
    public $b=20;  
    public function __construct($a,$b)

      {
              

        $c=$this->a+$this->b;
        echo "Additions are :".$c;

        

      }

}

$obj=new abc(10,20);

?>