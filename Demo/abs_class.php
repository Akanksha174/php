<?php
abstract class Car{
    public $name;
    public function __construct($name){
        $this -> name = $name;
    }
    abstract public function intro();
}

class Audi extends Car{
    public function intro(){
        return "proud to be Indian! I am a $this->name! ";
    }
}