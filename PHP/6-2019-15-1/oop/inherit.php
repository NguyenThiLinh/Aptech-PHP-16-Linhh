<?php
class Project{
    protected $name;
    public function construct($name = "Undefined"){
        $this ->name = $name;
    }
    public function setName($name){
        $this ->name = $name;
        return $this ;
    }
    public function getName(){
        return $this ->name;
    }
    public function display()
    {
        echo $this->name;
        }
    public function destruct()
    {
        echo "<br>End of class";
    }
}
class Anti extends Project 
{
public function construct()
{
parent::construct("Linh");
}
public function setName($name)
{
echo "You can not setName is $name for this project.<br>";
return $this;
}
}
$linh = new Anti();
$linh->setName("ABC")->display();