<?php
include('../includes/db.php');

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
    <style>
        .container{
            display:flex;
            justify-content: center;
            margin-top: 20px;
        }
        table,th,td{
            border:2px solid black;
            padding:5px;
            
        }
    </style>
</head>
<body>
    <div class="container">
    <table>
  <thead>
    <th>Template.Id</th>
    <th>Template_title</th>
    <th>Template_description</th>
    <th>Template_Image</th>
    <th>Date</th>
    <th>status</th>
  </thead>
  <tbody>

    <?php
    // $count=0;
    $select_cat="SELECT * from templates";
    $res_cat=mysqli_query($con,$select_cat);
    if($res_cat){
        while($row_data=mysqli_fetch_assoc($res_cat)){
            // $count+=1;
            $template_id=$row_data['product_id'];
            $template_title=$row_data['product_title'];
            $template_desc=$row_data['product_desc'];
            $template_image=$row_data['product_image'];
            $template_date=$row_data['dates'];
            $template_status=$row_data['status'];
            echo "   <tr>
            <td>$template_id</td>
                <td>$template_title</td>
                <td>$template_desc</td>
                <td><img src='../gallery/$template_image' alt='$template_title' width='100' height='100'/> </td>
                <td>$template_date</td>
                <td>$template_status</td>
                </tr> 
                ";
        }
    }
    
    ?>
    

  </tbody>
</table>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
</body>
</html>