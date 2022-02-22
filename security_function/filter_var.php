<?php
$mail="contact@gmail.com";
$email=filter_var($mail,FILTER_VALIDATE_EMAIL);
if($email==false){
    echo "invalid email";
}else{
    echo "valid email";
}


echo "<br>";

$mail="contact//////@gmail(((())))).com";
$email=filter_var($mail,FILTER_SANITIZE_EMAIL);
echo "sanitized email is:$email";


echo "<br>";

$a=10.5;
$aa=filter_var($a,FILTER_VALIDATE_FLOAT);
if($a==false){
    echo "number is not float";
}else{
    echo "valid float number";
}


echo "<br>";
$mail="contact//////@gmail(((())))).com";
$email=filter_var($mail,FILTER_SANITIZE_EMAIL);
$smail=filter_var($email,FILTER_VALIDATE_EMAIL);
if($smail==false){
    echo "invalid email";
}else{
    echo "valid email:$smail";
}
?>