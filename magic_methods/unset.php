<?php
class test{
    public $course="php";
    private $firstname;
    private $lastname;
    public function setName($fname,$lname){
        $this->firstname=$fname;
        $this->lastname=$lname;

    }
    public function __unset($property){
        unset($this->$property);
    }
}
$obj=new test();
$obj->setName("hello","world");
unset($obj->course);
unset($obj->firstname);
echo "<pre>";
print_r($obj);
echo "</pre>";

?>    