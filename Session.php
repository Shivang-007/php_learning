<?php
 session_start();
 $_SESSION["prog_language"]="PHP";
 print_r($_SESSION);
 echo "<br>";
 echo $_SESSION["prog_language"];
 session_unset();
 session_destroy();
 echo "Session is destroy";
?>


