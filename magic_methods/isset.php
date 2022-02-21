<?php
class test{
    public $firstname;
    private $lastname;
    function setName($firstname,$lastname){
        $this->fname=$firstname;
        $this->lname=$lastname;

    }

}
$obj=new test();
$obj->setName("gaurav","gupta");
echo isset($obj->lname);


?>