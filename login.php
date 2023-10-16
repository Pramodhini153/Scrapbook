<?php
session_start();
include('./includes/db.php');
if (isset($_POST['Submit'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
        $sel = "select * from user_table where user_name='$uname'";
        $res = mysqli_query($con, $sel);
        $num = mysqli_num_rows($res);
        $row = mysqli_fetch_assoc($res);

        if ($num > 0) {

            $_SESSION['username'] = $uname;
            if ($pwd != $row['user_password']) {
                echo "<script>alert('invalid password')</script>";
            } else {
                echo "<script>alert('login successful')</script>";
                echo "<script>window.open('home.php','_self')</script>";
            }
        } else {
            echo "<script>alert('invalid credentials')</script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid my-3 mt-5">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">

        <div class="col-lg-12 col-xl-6">
        <form action="" class="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-outline mb-4">
            <label for="user_username" class="form-label">User Name</label>
            <input type="text" class="form-control" id ="user_username" name="uname" placeholder="Enter your name">
        </div>
        <div class="form-outline mb-4">
            <label for="user_password" class="form-label">Password</label>
            <input type="text" class="form-control" id ="user_password" name="pwd" placeholder="Enter your password"> 
        </div>
        <div>
            <input type="submit" name="Submit" class="bg-info px-3 py-2 border-0" value="Login">
            <p class="mt-3 small fw-bold">Don't have an account ? <a href="registrate.php" class="text-danger">Register</a></p>
        </div>
        </form>
    </div>
    </div>
    </div>
    
</body>
</html>