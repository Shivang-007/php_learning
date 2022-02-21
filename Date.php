<?php

echo date("d-M-Y");
echo "<br>";
echo date("h:i:s");

echo "<br>";
date_default_timezone_set("Asia/Calcutta");
echo "<br>";
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");
echo "<br>";
echo date("r"); //display date and time
echo "<br>";


//Day parameter
echo date("d");  //return day with[01 to 31]
echo "<br>";
echo date("D");      //display 3 letter sof day like , sat,sun etc
echo "<br>";
echo date("l");      //return the full name of the day
echo "<br>";


//Month parameter

echo date("m");  //return month number with[01 to 12]
echo "<br>";
echo date("M");      //display 3 letter sof Month like , jan,feb etc
echo "<br>";
echo date("F");      //return the full name of the month
echo "<br>";
echo date("t");    //returns the number of day in a month like ,28,30 etc
echo "<br>";
 

//year parameter
echo date("L");  //leap year or not
echo "<br>";
echo date("y");      //two digit year format
echo "<br>";
echo date("Y");      //four digit year format
echo "<br>";


?>