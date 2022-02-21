<?php
//preg_match() 
$str="guru is my friend";
if(preg_match("/guru/",$str)){
   echo "$str contains guru";
}else{
    echo "$str not contain guru";
}

echo "<br>";


//preg_split()
$str2="I love coding";
$my_arr=preg_split("/ /",$str2);
print_r($my_arr);

echo "<br>";
//preg_replace()
$str3="good morning";
$str3=preg_replace("/morning/","afternoon",$str3);
echo $str3;


echo "<br>";

//email validation
$my_email = "name@company.com";
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $my_email)) {
echo "$my_email is a valid email address";
}
else
{
  echo "$my_email is NOT a valid email address";
}

?>