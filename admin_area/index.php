<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbourd</title>
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
<body>
<!-- navbar -->

<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/profile.png" alt="">
            <nav class="navbar navbar-expand-lg ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link"> welcome guest</a>

                    </li>

                </ul>



            </nav>
        </div>


    </nav>
    <!-- second child  -->
    <div class="bg-light">
        <h3 class="text-center p-2">
            Manage Details
        </h3>
    </div>

<!-- 
    third child  -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/profile.png" alt="" class="class-image"></a>
                <p class="text-light text-center">admin name</p>
            </div>
            <div class="button text-center">
                <button><a href="insert_product.php" class="nav-link text-light bg-info my-1"> insert products</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">view products</a></button>
                <button><a href="index.php?insert_cat" class="nav-link text-light bg-info my-1">insert categories</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">view categories</a></button>
                <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">insert brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">view brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Log out</a></button>
            </div>

        </div>
    </div>
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_cat'])){

            include('insert_categories.php');
        }
        if(isset($_GET['insert_brands'])){

            include('insert_brands.php');
        }
        
        ?>
    </div>
</div>
















    
    <!-- bootstrap js linmk -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>