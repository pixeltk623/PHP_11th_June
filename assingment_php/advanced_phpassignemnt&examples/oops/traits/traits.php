<?php
trait message

{
    
    public function msg1()

    {
     
        echo "OOps is best way to advanced";

    }

}

    class welcome

    {

       use message;

    }
 


$obj=new welcome();

$obj->msg1();



?>