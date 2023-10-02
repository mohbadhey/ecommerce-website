
<!-- connect mysql -->
<?php
include('includes/connect.php');

include('functions/common_functions.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce using php and mysql</title>
    <!-- bootstyrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <!-- 
navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg  bg-info">
            <div class="container-fluid">
                <img src="./images/profile.png" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="display_all.php">products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>
                            <?php cart_numbers(); ?>
                            </sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">total price: <?php cart_numbers(); ?>/-</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" 
                        aria-label="Search" name="search_data">
                        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                        <input type="submit" value="search" class="btn btn-outline-light" name="data_product">
                      </form>
                </div>
            </div>
        </nav>

        <!-- second child -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">

                    <a class="nav-link" href="#">welcome geust </a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="#">login </a>
                </li>
            </ul>

        </nav>

        <!-- third child -->

        <div class="bg-light">

            <h3 class="text-center">
                hidden store

            </h3>
            <p class="text-center">
                this is the price fescribtion oikn
            </p>
        </div>


        <!-- fourth child  -->
        <div class="row">
            <div class="col-md-10">
                <!-- productrs -->
                <div class="row">
                   
                        <?php
                   
                   search_products();
                   getuniquecate ();
                   getuniquebrands ();
                    ?>

                    
                  
                    
               
                </div>


            </div>

            <div class="col-md-2 bg-secondary p-0">
                <!-- brands -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h4>delivery bands</h4>


                        </a>
                    </li>

                    <?php
                   
                   //fetching brands
                   getbrands();
                    
                    ?>






</ul>
<!-- category -->
<ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h4>categories</h4>


                        </a>
                    </li>
                    <?php
                   //fetching categories
                   getcategories();
                    ?>

                    
                </ul>

            </div>
        </div>



    </div>



    </div>


    <!-- last child -->
    <div class="bg-info p-3 text-center">
        all riught reseced
    </div>

    </div>












    <!-- bootstrap js linmk -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>