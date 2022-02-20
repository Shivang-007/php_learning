<?php
class car{
    public $name;
    public $color;
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    function intro(){
      echo "car name is {$this->name} and color is {$this->color}";
    }
}
class start extends car{
    function run(){
        echo "car is running";
    }
  
}
$obj=new start("BMW","black");
$obj->run();
echo "<br>";
$obj->intro();

?>