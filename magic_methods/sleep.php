<?php
class test{
    public $name;
    public $age;
    public function setVal($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function __sleep(){
        return array('name');
    }
}
$obj=new test();
$obj->setVal("vinod",23);
$srl=serialize(($obj));
echo $srl;
?>