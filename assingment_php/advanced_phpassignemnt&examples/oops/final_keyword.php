<?php
//<!-- final keyword only declare before the class and method. -->

final class abc

{
  
    public $name="Brijesh";
    public function test()
    {

        echo $this->name;
    }


}

class b extends abc

{
  public function test1()
  {
  $name1="Rajesh";
  echo $name1;
  }

}
$obj=new b();
$obj->test();
$obj->test1();

?>