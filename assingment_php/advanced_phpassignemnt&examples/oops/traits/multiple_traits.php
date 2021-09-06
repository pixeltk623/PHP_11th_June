<?php
trait message
{

    public function msg()
    {
  
          echo "I am Prateek";

    }

}

trait message1
{

    public function msg1()


    {

        echo "I am Brijesh";
    }

}


class welcome

{
  
    use message;

}

class welcome1 

{
    use message,message1;
}

$obj=new welcome();
$obj->msg();
echo "<br>";


$obj=new welcome1();
$obj->msg1();


?>