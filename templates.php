<?php
include('./includes/db.php');
session_start();
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
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        .nav{
            gap:30px;
        }
        .nav div a{
            text-decoration: none;
            color: black;
            font-weight: 500;
            color:white;
        }
        
        button{
            border-radius: 10px;
        }

        .btn1 a input,.btn2 a input{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: black;
            width:80px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 10px;
        }
        /* .btn2 a input{
            margin-left: 20px;
        } */
        .btn1,.btn2{
            padding-top: 30px 5px;
            
        }
        .btn1{
          margin-left:500px;
        }
        .bg{
            background:  rgba(201, 201, 201,0.1);
            /* padding: 10px */
            margin-top: 50px;
        }
        /* .hi{
          object-fit:contain;
        } */
        
    </style>
</head>
<body>
<div class="nav px-3 bg-info">
      <img src="./images/Mixbook_logo.svg" height="50" class="m-3" width="100" alt="">
      <div class="mt-4">
        <a href="home.php">Home</a>
      </div>
      <div class="mt-4">
        <a href="templates.php">Templates</a>
      </div>
      <?php
          if(isset($_SESSION['username'])){
            echo "<div class='btn1'>
            <a href='logout.php'>
            <input type='submit' class='bg-light border-0 mt-4' value='Logout'>
          </a>
          </div>";
          }
          else{
            echo "<div class='btn1'>
            <a href='login.php'>
            <input type='submit' class='bg-light border-0 mt-4' value='Login'>
          </a>
          </div>";
          }
          if(isset($_SESSION['username'])){
            echo " ";
          }
        else{
          echo "<div class='btn2'>
          <a href='registrate.php'>
          <input type='submit' class='bg-light border-0 mt-4' value='Sign Up'>
        </a>
        </div>";
        }
      ?>
      </div>
      <div class="my-3 text-center">
      I scrapbook because my memory will never be good enough to remember these little details. The best memories are the ones made with the people you love.
      </div>

<div class="row">
<div class="col-md-3 bg-info text-light text-center">
<h2 >Categories</h2>
<?php
    // $count=0;
    $select_cat="SELECT * from categories";
    $res_cat=mysqli_query($con,$select_cat);
    if($res_cat){
        while($row_data=mysqli_fetch_assoc($res_cat)){
            // $count+=1;
            $category_id=$row_data['category_id'];
            $category_title=$row_data['category_title'];
            echo "
                <a style='text-decoration:none;color:white;' href='templates.php?category=$category_id'>
                <h5  class='links my-5'>$category_title</h5></a>";
        }
        
    }
    ?>


</div>
<div class="col-md-9 bg-secondary">
<div class='row'>
  <?php
  // if(isset($_SESSION['username'])){                                                                                                        
      if(isset($_GET['category'])){
      $cat_id=$_GET['category'];
      $select_cat="SELECT * from templates where category_id=$cat_id";
      $res_cat=mysqli_query($con,$select_cat);
      if($res_cat){
          while($row_data=mysqli_fetch_assoc($res_cat)){
              // $count+=1;
              $product_id=$row_data['product_id'];
              $category_id=$row_data['category_id'];
              $product_title=$row_data['product_title'];
              $product_keyword=$row_data['product_keyword'];
              $product_image=$row_data['product_image'];
              echo "
              
              <div class='col-md-4'>
              <a href='template_view.php?product=$product_id'>
              <img src='./images/$product_image' height='300px' width='300px' class='hi m-1 mx-2 my-2' alt=''>
              </a>
              </div>
            
              ";
            }
        }
    }
    else{
      $select_cat="SELECT * from templates";
      $res_cat=mysqli_query($con,$select_cat);
      if($res_cat){
          while($row_data=mysqli_fetch_assoc($res_cat)){
              // $count+=1;
              $product_id=$row_data['product_id'];
              $category_id=$row_data['category_id'];
              $product_title=$row_data['product_title'];
              $product_keyword=$row_data['product_keyword'];
              $product_image=$row_data['product_image'];
              echo "
              
              <div class='col-md-4'>
              <a href='template_view.php?product=$product_id'>
              <img src='./images/$product_image' height='300px' width='300px' class='hi m-1 mx-2 my-2' alt=''>
              </a>
              </div>
            
              ";
            }
        }
    }

?>
</div>
<!-- <div class='row'>
             <div class='col-md-4'>
             <a href='./images/dad.jpg?category=category_id'>
             <img src='./images/dad.jpg' height='300px' width='350px' class='hi m-1 my-2' alt=''>
             </a>
             </div>
           </div>
</div> -->
</div>
<div class="bg-dark text-white p-3 text-center mt-5">
  <p>All rights reserved &copy - Designed by Pramodhini-2023</p>
</div>
</body>
</html>