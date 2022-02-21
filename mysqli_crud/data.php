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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="text-center mt-3">
<button class="btn btn-primary"><a href="form.php" style="color:white;text-decoration:none;display:flex;justify-content:center;">Back to the form</a></button>
</div>    
<div class="col-lg-8 mx-auto mt-5">
        <table class="table table-stripped table-responsive table-hover">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Tech. Stack</th>
                    <th>Degree</th>
                    <th colspan="2">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $sql = "select * from crud";
                $query = mysqli_query($con, $sql);
                while ($result = mysqli_fetch_assoc($query)) {
                ?>

                    <tr>
                        <td><?php echo $result['id']; ?></td>
                        <td><?php echo $result['name']; ?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['stack']; ?></td>
                        <td><?php echo $result['degree']; ?></td>
                        <td><a href="update.php?id=<?php echo $result['id']; ?>"><i class="fa-solid fa-pen-to-square" style="color:green;"></i></a></td>
                        <td><a href="delete.php?id=<?php echo $result['id']; ?>"><i class="fa-solid fa-trash-can" style="color:red;"></i></a></td>


                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>