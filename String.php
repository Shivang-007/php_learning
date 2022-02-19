<?php
echo 'i\'ll help you';
$word='word';
echo '<br>';
echo "pass\$word";
echo '<br>';
$name='mehul';
$var=<<<EOT
 $name is a good boy.
EOT;
echo $var;
echo '<br>';
$my_var="php programming";
echo strlen($my_var);
echo '<br>';
echo substr('php programming',0,4);
echo '<br>';
echo str_replace('php','java',$my_var);
echo '<br>';
$str1='welcome to the surat,welcome to the gujarat';
$pattern='/welcome/i';
echo preg_match($pattern,$str1);
echo '<br>';
echo preg_match_all($pattern,$str1);
?>