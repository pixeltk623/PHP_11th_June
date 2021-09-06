<?php
class a
{
   
    public function add($a,$b,$c)
    {
    
          $d=$a+$b+$c;
          echo "Additions of Numbers are :".$d."<br>";

    }

}


class b extends a

{
 
    public function add($a,$b,$c)
    {
    
          $d=$a*$b*$c;
          echo "Multiplications of Numbers are :".$d."<br>";

    }

}


$obj=new b();
$obj->add(4,3,2);

?>