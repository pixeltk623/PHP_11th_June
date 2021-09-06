<!-- 1)call by value
2)call by refrence -->

<?php
function mul($a,$b)
{
   $c=$a*$b;
   return $c;

}

echo "Multiplications are ".mul(4,5);


?>