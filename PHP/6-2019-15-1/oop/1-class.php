<?php

class Project {
    protected $name;

    public static function helloworld(){
        echo "Hello world ";
    }

    public function construct ($name = "Undefined"){
        echo "Begin of class <br>";
        $this ->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this -> name = $name;
        return $this;
    }
    public function display(){
        echo $this ->name. "<br>";
    }

    public function destruct(){
        echo "end of class. <br>";
    }
}

Project ::helloworld();
$anti = new Project;
$anti -> setName("Linh")->display();