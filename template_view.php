<?php
include('./includes/db.php');
session_start();
if(isset($_POST['go'])){
    $text=$_POST['text'];
    $product_id=$_GET['product'];
    if(!isset($_SESSION['username'])){
        echo "<script>alert('Please Login...')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        if($text==""){
            echo "<script>alert('Enter Some Text...')</script>";
            echo "<script>window.open('templates.php','_self')</script>";
        }
        else{
            $name=$_SESSION['username'];
            $user_qry="SELECT * from user_table where user_name='$name'";
            $res_user_qry=mysqli_query($con,$user_qry);
            $user_data=mysqli_fetch_assoc($res_user_qry);
            $user_id=$user_data['user_id'];
            $insert_text="INSERT into text(user_id,desp,product_id,text_date) values($user_id,'$text',$product_id,NOW())";
            $res_insert_text=mysqli_query($con,$insert_text);
            if($res_insert_text){
                echo "<script>alert('Book Created...')</script>";
                echo "<script>window.open('templates.php','_self')</script>";
            }
       }
    }
}
?>
<!-- update query -->
<?php
                    if(isset($_POST['update'])){
                        $update_id=$_GET['product'];
                        $update_text=$_POST['text'];
                        $update_text="UPDATE text set desp='$update_text',text_date=NOW() where product_id=$update_id";
                        $res_update_text=mysqli_query($con,$update_text);
                        if($res_update_text){
                            echo "<script>alert('Book Updated...')</script>";
                            // echo "<script>window.open('logout.php','_self')</script>";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <style>
        *{
            padding: 0px;
            margin:0;
            box-sizing: border-box;
            
        }
        body{
            background: rgb(0, 213, 255);
            
        }
        .one{
            background-repeat: no-repeat;
            background-size: cover;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:20px;
        }
        /* img{
            object-fit: contain;
        } */
        .two{
            min-height: 450px;
            max-height: auto;
            width: 400px;
            margin-bottom:5px;
        }
        label{
            font-size:30px;
            font-weight:bold;
            text-align:center;
        }
        .data{
            position: absolute;
            margin-left:40px;
            width:700px;
            font-weight:bold;
        }
        .text{
            margin-left:120px;
        }
        .date{
            font-size:20px;
            margin-top:15px;
            margin-left:30px;
        }
    </style>
</head>
<body>
<h1 class='date text-light mb-0'>DATE : <?php 
if(isset($_SESSION['username'])){
    $product_id=$_GET['product'];
    $name=$_SESSION['username'];
    $user_qry="SELECT * from user_table where user_name='$name'";
    $res_user_qry=mysqli_query($con,$user_qry);
    $user_data=mysqli_fetch_assoc($res_user_qry);
    $user_id=$user_data['user_id'];
    if($res_user_qry){
        $date_qry="SELECT * from text where user_id=$user_id and product_id=$product_id";
        $res_date_qry=mysqli_query($con,$date_qry);
        $text_data=mysqli_fetch_assoc($res_date_qry);
        if($text_data>0){
            $textdate=$text_data['text_date'];
            echo $textdate;
        }
        else{
            echo " ";
        }
    }
    
}

?></h1>
    <div class="row d-flex mt-0">
        <div class="one col-md-8 ">
            <?php
            if(isset($_GET['product'])){
                 $product_id=$_GET['product'];
                 $qry1="select * from templates where product_id=$product_id";
                 $res_qry1=mysqli_query($con,$qry1);
                 $row_data2=mysqli_fetch_assoc($res_qry1);
                 $image=$row_data2['product_image'];
                 if(isset($_SESSION['username'])){
                    $uname=$_SESSION['username'];
                    $user_qry="SELECT * from user_table where user_name='$uname'";
                    $res_user_qry=mysqli_query($con,$user_qry);
                    $user_data=mysqli_fetch_assoc($res_user_qry);
                    $user_id=$user_data['user_id'];
                    $qry="SELECT * from text where product_id=$product_id and user_id=$user_id";
                    $res_qry=mysqli_query($con,$qry);
                    $row_data1=mysqli_fetch_assoc($res_qry);
                    $num=mysqli_num_rows($res_qry);
                //  echo $num;
                    if($num==1){
                        $data=$row_data1['desp'];
                       echo  "<img src='./images/$image' width='820px'
                        height='500px' alt=''>
                        <p class='data'>$data</p>";
                    }                 
                    else{
                        echo "<img src='./images/$image' width='800px'
                        height='500px' alt=''>";
                    }
                }
                else{
                    echo "<img src='./images/$image' width='800px'
                    height='500px' alt=''>";
                }    
        }
            ?>
        </div>
        <div class="col-md-4">
            <form action="" method="post">
                <div class="form-outline">
                    <label for="text" class="text form-label text-light" >Enter text</label><br>
                    <input type="text" class="two form-input" id ="text" name="text" 
                    placeholder="create your book of memories by entering moments..."> 
                </div>
                <div class="form-outline  m-auto w-100 d-flex mb-5">
                <?php
                    if(isset($_SESSION['username'])){
                        $uname=$_SESSION['username'];
                        $user_qry="SELECT * from user_table where user_name='$uname'";
                        $res_user_qry=mysqli_query($con,$user_qry);
                        $user_data=mysqli_fetch_assoc($res_user_qry);
                        $user_id=$user_data['user_id'];
                        $qry="SELECT * from text where product_id=$product_id and user_id=$user_id";
                        $res_qry=mysqli_query($con,$qry);
                        $row_data1=mysqli_fetch_assoc($res_qry);
                        $num=mysqli_num_rows($res_qry);
                        if($num==0){
                            echo "<input type='submit' name='go' value='Go' style='margin-left:160px;width:80px;' 
                            class='btn btn-light' required='required'>";
                        }
                        else{
                            echo "<input type='submit' name='update' value='Update' style='margin-left:160px;width:80px;' 
                            class='btn btn-light' required='required'>";
                        }
                    }
                    else{
                            echo "<input type='submit' name='go' value='Go' style='margin-left:160px;width:80px;' 
                            class='btn btn-light' required='required'>";
                        
                    }
                ?>
                    
                    
        </div>
            </form>
        </div>
    </div>
</body>
</html>