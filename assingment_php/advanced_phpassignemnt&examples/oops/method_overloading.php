<?php
class a
{
   
    public function add($a,$b)
    {
    
          $c=$a+$b;
          echo "Additions of Numbers are :".$c."<br>";

    }

}


class b extends a

{
 
    public function add($c,$d,$e)
    {
    
          $f=$c*$d*$e;
          echo "Multiplications of Numbers are :".$f."<br>";

    }

}


$obj=new b();
$obj->add(4,3,2);

?>