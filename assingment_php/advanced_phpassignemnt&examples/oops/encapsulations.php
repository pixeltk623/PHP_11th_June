<?php
class person
{
    public $name;
    public $age;

    public function __construct($n,$a)
    {
     
        $this->name=$n;
        $this->age=$a;


    }

    public function setAge($ag)

    {

       $this->ag=$ag;

    }

    public function display()

    {

        echo "welcome :".$this->name."<br>";

        return $this->age-$this->ag;
    }
       

}
$obj=new person("prateek",25);
$obj->setAge(5);
echo "You are :".$obj->display()."years of old";



?>