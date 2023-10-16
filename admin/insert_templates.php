<?php
include('../includes/db.php');
if(isset($_POST['insert_template'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_status=true;
    //image accessing
    $product_image=$_FILES['product_image']['name'];
     //accessing temporary name image 
     $temp_image=$_FILES['product_image']['tmp_name']; 
     //checking empty condition
     if($product_title=="" or $product_description=="" or $product_keyword=="" or $product_category=="" or
     $product_image==""){
        echo "<script>alert('Please fill the available fields')</script>";
        exit();
     }
     else{
        //moving images
        move_uploaded_file($temp_image,"../gallery/$product_image");
        // insert query
        $insert_products_qry="insert into templates(product_title,product_desc,product_keyword,category_id,
        product_image,dates,status) values('$product_title','$product_description','$product_keyword','$product_category',
        '$product_image',NOW(),'$product_status')";
        $res_insert_products=mysqli_query($con,$insert_products_qry);
        if($res_insert_products){
            echo "<script>alert('Successfully inserted the products')</script>";
        }   
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
</head>
<body>
<h1 class="text-center mt-4">Insert Templates</h1>
    <form action="" method="post" enctype="multipart/form-data" >
        <div class="form-outline mb-4 m-auto w-50">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" name="product_title" id="product_title" placeholder="Enter Product title" class="form-control"
            required="required">
        </div>
        <div class="form-outline mb-4 m-auto w-50">
            <label for="product_description" class="form-label">Product Description</label>
            <input type="text" name="product_description" id="product_description" placeholder="Enter Product Description" class="form-control"
            required="required">
        </div>
        <div class="form-outline mb-4 m-auto w-50">
            <label for="product_keyword" class="form-label">Product Keyword</label>
            <input type="text" name="product_keyword" id="product_keyword" placeholder="Enter Product keywords" class="form-control"
            required="required">
        </div>
        <div class="form-outline mb-4 m-auto w-50">
            <select name="product_category" id="product_category" class="form-select">
                <option value="">Select a Category</option>
                <?php
                    $select_query="SELECT * from categories";
                    $res_query=mysqli_query($con,$select_query);
                    while($row_data=mysqli_fetch_assoc($res_query)){
                        $category_id=$row_data['category_id'];
                        $category_title=$row_data['category_title'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-outline mb-4 m-auto w-50">
            <label for="product_image" class="form-label">Product image</label>
            <input type="file" name="product_image" id="product_image" class="form-control"
            required="required">
        </div>
        <div class="form-outline mb-4 m-auto w-50">
            <input type="submit" name="insert_template" value="insert_template" class="btn btn-info mb-3 px-3"
            required="required">
        </div>
    </form>
</body>
</html>