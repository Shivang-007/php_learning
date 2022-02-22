<?php
$str="hello world";
echo $str."<br>";
echo md5($str,TRUE)."<br>"; //return 16 bit binary format
echo md5($str)."<br>";   //return 32 bit Hexa format
echo sha1($str,TRUE)."<br>";   //return 20 bit binary format
echo sha1($str)."<br>";    //return 40 bit hexa format


?>