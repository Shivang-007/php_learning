<?php

abstract class car{
    public $name;
    public $color;
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    abstract function intro();
}
class start extends car{
    function intro(){
        return  "{$this->name} is running and its color is {$this->color}";
    }
  
}
$obj=new start("Audi","blue");
echo $obj->intro();

?>