

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="style.css" rel="stylesheet"/>

<title>Document</title>
</head>
<body>
<form action="" method="post">
<?php
include 'connection.php';
$id=$_GET['id'];
$sql="select * from crud where id=$id";
$query=mysqli_query($con,$sql);
$result=mysqli_fetch_array($query);
 if(isset($_POST['submit'])){
    $id=$_GET['id'];
     $name=$_POST['name'];
     $email=$_POST['email'];
     $stack=$_POST['stack'];
     $degree=$_POST['degree'];
     $update="update crud set name='$name',email='$email',stack='$stack',degree='$degree' where id='$id'";
     $update_result=mysqli_query($con,$update);
     if($update_result){
    ?>
         <script>alert("data updated succesfully");</script>
         <?php
     }else{
         ?>
         <script>alert("data is not updated succesfully");</script>
         <?php
    }

 }

?>
    <div class="main-div col-lg-6 mx-auto">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control" placeholder="Enter your name"  id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result['name']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control"   placeholder="Enter your E-mail" id="exampleInputPassword1" value="<?php echo $result['email']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Technical Stack</label>
    <input type="text" name="stack" class="form-control"  placeholder="Enter your stack" id="exampleInputPassword1" value="<?php echo $result['stack']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Degree</label>
    <input type="text" name="degree" class="form-control"  placeholder="Enter your Degree" id="exampleInputPassword1" value="<?php echo $result['degree']; ?>">
  </div>
  <button type="submit" name="check" class="btn btn-primary"><a href="data.php" style="color:white;text-decoration:none;">check details</a></button>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>
    
</body>
</html>
