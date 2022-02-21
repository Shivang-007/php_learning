<?php
include 'connection.php';
$id=$_GET['id'];
$delete="delete from crud where id=$id";
$query=mysqli_query($con,$delete);
header("location:data.php");
/*if($query){
    ?>
         <?php
         
         exit();
     }else{
         ?>
         <script>alert("data is not deleted succesfully");</script>
         <?php
    }*/
?>