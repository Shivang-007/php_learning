<?php
class student{
    public $name;
    private static function hello($name){
        echo "this is hello message from $name";
    }
    public static function __callstatic($method,$args){
       if(method_exists(__class__,$method)){
          call_user_func_array([__class__,$method],$args);
       }else{
          echo "methos does not exist";
       }
    }
}
student::hello("gaurav");
?>