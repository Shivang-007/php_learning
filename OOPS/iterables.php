<?php
class hello{
    function iter(iterable $myitem){
        foreach($myitem as $item){
            echo "$item <br>";
        }
    }
    

}
$arr=["apple","banana","orange"];
$test=new hello();
$test->iter($arr);


?>