<?php
class add

{
  
    public $a=10;
    public function display()
    {
       
        //echo $this->a;
        $b=20;
        $c=$this->a+$b;  //$this  is a pseudo variables

        echo "Additions of two Numbers are :".$c;


    }

}

$obj=new add();
$obj->display();


?>