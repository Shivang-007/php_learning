<?php

interface car{
    public function intro($name,$color);
}
class start implements car{
    function intro($name,$color){
        return  "$name is running and its color is $color";
    }
  
}
$obj=new start();
echo $obj->intro("BMW","black");

?> 
