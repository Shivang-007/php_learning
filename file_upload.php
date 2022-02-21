<?php
if(isset($_FILES["image"])){

    $file_name=$_FILES['image']['name'];
    $file_type=$_FILES['image']['type'];
    $file_tmpname=$_FILES['image']['tmp_name'];
    $file_size=$_FILES['image']['size'];
    $fn="./upload_image".$file_name;
    if(move_uploaded_file($file_tmpname,$fn)){
      echo "$file_name. uploaded succesfully";
    }else{
        echo "image couldnt upload";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data"> 
    <input type="file" name="image"><br><br>
    <input type="submit" value="submit">
    <br>
    </form>
</body>
</html>