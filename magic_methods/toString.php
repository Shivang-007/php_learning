<?php
class test{
   public function __toString(){
       echo "cannot print object as a string";
   }
}
$obj=new test();
echo $obj;
?>