<?php
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
  }
  .btn1{
    margin-left:500px;
    
    
  }
  button{
    border-radius: 10px;
  }
  .container{
    margin-top: 50px;
    margin-left: 250px;
    width: 900px;
    background: rgb(237, 231, 231);
  }
  .img1{
    margin: 10px;
    margin-left: 30px;
    margin-bottom: 40px;
  }
  .btn1 a input,.btn2 a input{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-size: 16px;
    color: white;
    width:80px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 10px;
  }
  .btn2 a input{
    margin-left: 20px;
  }
  .btn1,.btn2{
    padding-top: 30px 5px;
  }
  .caption{
    margin: 10px;
    margin-top: 130px;
  }
  .caption input{
    background: rgb(214, 72, 72);
    border: 0;
    color: white;
    padding: 8px 20px;
  }
  .desc{
    margin-top: 100px;
    text-align: center;
  }
  .desc p{
    font-size: 40px;
  }
  .m{
    margin-left: 250px;
  }
  .one{
    gap:50px;
    
  }
  .one1{
    margin-left: 150px;
    margin-top: 100px;
  }
  .one2{
    margin-left:0;
  }
  .two1{
    margin-left: 150px;
    margin-top:100px;
    margin-right:30px;
    
  }
  .two2{
    margin-top: 150px; 
  }
  .title1{
    font-size: 40px;
  }
  .three{
    margin-top:100px;
  }
  .images1{
    margin-left: 200px;
    
  }
  .images{
    gap:5px;
    margin-bottom: 30px;
    margin-top: 50px;
  }
  .logos{
    margin-left: 500px;
    margin-top: 50px;
  }
  .bg{
    background:  rgba(201, 201, 201,0.1);
    /* padding: 10px */
    margin-top: 50px;
  }
    </style>
</head>
<body>
<div class="nav mx-3">
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
            <input type='submit' class='bg-info border-0 mt-4' value='Logout'>
          </a>
          </div>";
          }
          else{
            echo "<div class='btn1'>
            <a href='login.php'>
            <input type='submit' class='bg-info border-0 mt-4' value='Login'>
          </a>
          </div>";
          }
          if(isset($_SESSION['username'])){
            echo " ";
          }
        else{
          echo "<div class='btn2'>
          <a href='registrate.php'>
          <input type='submit' class='bg-info border-0 mt-4' value='Sign Up'>
        </a>
        </div>";
        }
      ?>
</div>
<div class="text-center bg-info text-light">
  <marquee><h5 class="mt-1">Let's Create your book of memories and express your feelings and thoughts...</h5></marquee>
</div>
<div>
  <div class="container">
    <div class="d-flex py-3">
    <div class="img1">
      <img src="./images/homeimag.png"  height="400" width="400" alt="">
    </div>
    <div class="caption">
      <h1>Perfect Moments</h1>
      <p>The most beautiful way to show your love</p>
      <a href="templates.php">
      <input type="submit" value="CREATE YOUR BOOK">
      </a>
    </div>
  </div>
 
  <!-- <div class="text-center mt-4"><h7 class="text-center"> Design Beautiful Scrapbooks online using Mixbook scrapbook maker.Start Designing a Scrapbook.Easy to create and customize Beautifully Designed...</h7></div> -->
  </div>
  <div class="bg">
  <div class="logos d-flex py-3">
    <div>
      <img src="./images/leaf1.png" style="margin-right: 10px;" height="100" width="100" alt="">
    </div>
    <div style="color:rgb(6, 6, 100);font-weight: bold;margin-left: 5px;">
      <p><span style="font-weight: bolder;font-size: 25px;margin-left: 5px;">#1 RATED</span><br>
      IN PHOTO BOOKS<br>
      <span style="font-weight: bolder;margin-left: 25px;">See Why</span></p>
    </div>
    <div>
      <img src="./images/leaf2.png" style="margin-top: 5px;" height="100" width="100" alt="">
    </div>
  </div>
</div>
<div class="desc">
  <p>How To make A Digital Scarpbook Online With Mixbook</p>
  </div>
  <div class="one d-flex">
    <div class="one1">
      <h3><i class="fa fa-check mx-2" aria-hidden="true"></i>100% Happiness Guaranteed</h3><br>
      <p>
      <span class="m"> At Mixbook, we believe your creation experience should<br> be fun and </span>uncomplicated.

 It’s why we work hard to ensure every step of your creation <br>process — from design   to your finished product 
 — is just the way you want it every time, or<br> we’ll make it right.</p>
    </div>
    <div class="one2">
      <img src="./images/animal.jpg" width="350" height="300" alt="">
    </div>
  </div>
</div>
<div class="two d-flex">
  <div class="two1">
    <img src="./images/nature2.png" width="350" height="300" alt="">
  </div>
  <div class="two2">
    
    <h3><i class="fa fa-check mx-2" aria-hidden="true"></i>Your Story, Your Way</h3><br>
    <p>
    <span class="m"> An easy, breezy way to create travel books. </span><br> 
    Our editor gives you the creative freedom to fully customize your design — 
    it's free, fun, and <br> easy to use on any device.</p>
  </div>
  
</div>
</div>
<div class="three">
  <p class="title1 text-center fs-20">Meet Our Community Of Mixbookers</p>
  <p class="text-center">
  Get inspired by what others are making, or add your own project to<br>
Instagram for a chance to be featured here.</p>
</div>
<div class="images d-flex">
  <div class="image1">
    <img src="./images/dad.jpg" style="margin-left: 150px;" height="300px" width="250px" alt="">
  </div>
  <div class="image2">
    <img src="./images/animal.jpg" height="300px" width="250px" alt="">
  </div>
  <div class="image3">
    <img src="./images/brother.jpg" height="300px" width="250px" alt="">
  </div>
  <div class="image4">
    <img src="./images/love.jpg" height="300px" width="250px" alt="">
  </div>
</div>
<div class="bg-dark text-white p-3 text-center mt-5">
  <p>All rights reserved &copy - Designed by Pramodhini-2023</p>
</div>
</body>
</html>