<?php
class test{
    private $firstname;
    private $lastname;
    private function setName($firstname,$lastname){
        $this->fname=$firstname;
        $this->lname=$lastname;

    }
    public function __call($method,$args){
        echo "$method is private or non existing in a test class";
        echo "<br>";
        echo "<pre>";
        echo print_r($args);
        echo "</pre>";

    }

}
$obj=new test();
$obj->setName('hello','world');
?>