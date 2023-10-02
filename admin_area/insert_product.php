<?php

include('../includes/connect.php');

if(isset($_POST['insert_product'])){

    $prodcut_title= $_POST['prodcut_title'];
    $product_description= $_POST['product_description'];
    $product_keyword= $_POST['product_keyword'];
    $product_category= $_POST['product_category'];
    $product_brand= $_POST['product_brand'];
    $product_price= $_POST['product_price'];
    $product_status = 'true';



    //accessing images


    $product_image1= $_FILES['product_image1']['name'];
    $product_image2= $_FILES['product_image2']['name'];
    $product_image3= $_FILES['product_image3']['name'];

//accessing image tmp
$temp_image1= $_FILES['product_image1']['tmp_name'];
$temp_image2= $_FILES['product_image2']['tmp_name'];
$temp_image3= $_FILES['product_image3']['tmp_name'];

//condition

if(  $prodcut_title == ''or $product_description == '' or  $product_keyword == '' or
 $product_category =='' or $product_brand == ''  or $product_price == '' or $product_image1 =='' or  
 $product_image2=='' or  $product_image3=='') {
    echo "<script>alert(' please fill the missing blanks')</script> ";
    exit();


 } else{
    move_uploaded_file($temp_image1, "./product_images/$product_image1");
    move_uploaded_file($temp_image2, "./product_images/$product_image2");
    move_uploaded_file($temp_image3, "./product_images/$product_image3");

    ///insert ptoducts
    $insert_products = "insert into     `products` (prodcut_title ,product_description,product_keyword,catgory_id,
    brand_id,product_image1,product_image2,product_image3,product_price,date,status
    )  values ('$prodcut_title',' $product_description', ' $product_keyword','$product_category','$product_brand',
       '$product_image1' , '$product_image2' ,'$product_image3' ,$product_price, now(),  '$product_status')" ;

       $results_query = mysqli_query($con ,   $insert_products);

       if($results_query ) {
        echo "<script>alert(' inserted succesfully ')</script> ";
       }



 }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert products Admin</title>
      <!-- bootstyrap link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="..style.css">
    <style>
        .class-image{
    width: 80px;
    object-fit: contain;
}
    </style>
</head>
<body class="bg-light">
<div class="container mt-3">
    <h1 class="text-center"> Insert Products</h1>

    <!-- form  -->
    <form method="POST" enctype="multipart/form-data">
        <!-- title -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_title" class="form-label"> product_title  </label>
    <input type="text" name="prodcut_title" id="prodcut_title" class="form-control"
     placeholder="Enter product title" autocomplete="off" require>
</div>
<!-- description -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_description" class="form-label"> product description  </label>
    <input type="text" name="product_description" id="product_title" class="form-control"
     placeholder="Enter product description" autocomplete="off" require>
</div>
<!-- keyword -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_keyword" class="form-label"> product keyword  </label>
    <input type="text" name="product_keyword" id="product_keyword" class="form-control"
     placeholder="Enter product keyword" autocomplete="off" require>
</div>
<!-- categories -->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="product_category" id="" class="form-select">
         <option value="apple">select category</option>
         <?php
         
         
         $select_query = "select * from categories";
         $results_query = mysqli_query($con , $select_query );
         while($row = mysqli_fetch_assoc( $results_query )){
            $category_title = $row['category_title'];
            $catgory_id = $row['catgory_id'];
            echo "<option value='  $catgory_id'> $category_title</option>";
         }
         ?>


    </select>
</div>
<!-- brand -->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="product_brand" id="" class="form-select">
         <option value="">select brand</option>
         <?php
         
         
         $select_query = "select * from brand";
         $results_query = mysqli_query($con , $select_query );
         while($row = mysqli_fetch_assoc( $results_query )){
            $brand_title = $row['brand_title'];
            $brand_id = $row['brand_id'];
            echo "<option value='     $brand_id'> $brand_title</option>";


         }
         
         ?>


    </select>
</div>
<!-- image 1 -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image1" class="form-label"> product image 1  </label>
    <input type="file" name="product_image1" id="product_image1" class="form-control"require>
</div>
<!-- image 2 -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image2" class="form-label"> product image 2  </label>
    <input type="file" name="product_image2" id="product_image2" class="form-control"require>
</div>
<!-- image 3 -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image3" class="form-label"> product image 3  </label>
    <input type="file" name="product_image3" id="product_image3" class="form-control"require>
</div>
<!-- price -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_price" class="form-label"> product price  </label>
    <input type="text" name="product_price" id="product_price" class="form-control"
     placeholder="Enter product price" autocomplete="off" require>
</div>
<!-- button -->
<div class="form-outline mb-4 w-50 m-auto">
  <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert product">
</div>
    </form>
</div>
    
</body>
</html>