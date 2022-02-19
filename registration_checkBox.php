<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST["form_submitted"])): 
         if(!isset($_POST["agree"])):
            echo 'you have not accepted our agreement';
         else:
            echo "thank you ".$_POST["firstname"]."<br>";
            echo "you have register as".$_POST["firstname"]." ".$_POST["lastname"];
            echo "<br> Go <a href='registration_checkBox.php'>back</a> to the form" ;   
         endif;?>
<?php else:?>
<h2>Registration Form</h2>

<form action="" method="POST">

     First name:
    <input type="text" name="firstname">
    
    <br> Last name:
    <input type="text" name="lastname">
    <br>
    <input type="checkbox" name="agree"> terms and conditions<br>
    
<input type="hidden" name="form_submitted" value="1" />

    <input type="submit" value="Submit">

</form>
<?php endif;?>
</body>
</html>