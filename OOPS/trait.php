<?php
trait hello{
    public function sayHello(){
        echo"hello world";
    }
}
trait bye{
    public function sayBye(){
        echo "good bye";
    }
}
class A{
    use hello,bye;
}
$obj=new A();
$obj->sayHello();
$obj->sayBye();

?>