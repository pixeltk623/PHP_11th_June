<?php
class a
{
    public function test()
    {
        $name="Brijesh";
        echo $name."<br>";
    }
}
class b extends a
{

    public function test1()
    {
        $name1="Bhavika";
        echo $name1."<br>";
    }

}

class c extends a,b
{

    public function test2()
    {
        $name2="Bhavika";
        echo $name2."<br>";
    }

}

$obj=new c();
$obj->test();
$obj->test1();
$obj->test2();  
//Note : not supported in php
?>