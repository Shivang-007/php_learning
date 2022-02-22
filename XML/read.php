<?php
$xml=simplexml_load_file('employee.xml');
echo "Employee List";
echo "<br>";
$list=$xml->record;
for($i=0;$i<count($list);$i++){
    echo "employee No:". $list[$i]->attributes()->empno ." <br>";
    echo "Employee name is :".$list[$i]->name ."<br>";
    echo "Employee department  is :".$list[$i]->dept ."<br>";
}
?>