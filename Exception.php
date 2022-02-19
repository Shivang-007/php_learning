<?php
$a=0;
try{
    if($a!=0){
    echo 2/$a;
    } 
else{
    $var="could not divide by zero";
    throw new exception ($var);
}
}
catch(exception $e){
    echo $e->getMessage();
    echo "<br>";
    echo $e->getCode();
    echo "<br>";
    echo $e->getLine();
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    print_r( $e->getTrace());
    echo "<br>"; 
    echo $e->getTraceAsString();
    echo "<br>"; 
    echo $e->__toString();
    echo "<br>"; 
}
?>