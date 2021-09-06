<?php
//<!-- final keyword only declare before the class and method. -->

class abc

{
  
    final public function test($name)
    {

        echo $name;
    }


}

class b extends abc

{
  public function test($name)
  {

  echo $name;
  }

}
$obj=new b();
$obj->test("brijesh");


?>