<?php
//user defined function with exception
function checknumber($num)
{

    if($num >=3)
    {
    //throw an exception

    throw new Exception("Value must be less than 1");


    }


return true;

}

 //put it in try block

 try
 {
   
    checknumber(5);

    echo "check this is less than 1";

 }


 //catch exception

 catch(Exception $e)

 {

    echo "Exception message :".$e->getMessage();
 }


?>