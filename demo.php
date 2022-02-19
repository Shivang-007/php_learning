<?php
 echo 'hello world';
 echo '<br>';

 $movies=array(0=>'sanam',
              1=>'om shanti om',
              2=>'kesari',
              3=>'jersy',
              4=>'shershah',
              5=>'naseeb',
);
foreach($movies as $m){
    echo $m .'<br>';
}
print_r($movies);
echo '<br>';
echo $movies[3];
echo '<br>';

$n=10;
if ($n%2==0){
echo "$n is even number";
}
else{
echo "$n is odd number";
}
 ?>