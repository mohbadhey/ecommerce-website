
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
    <style>
        .cart-image{
            width: 80px;
            height: 80px;
            object-fit: contain;
        }
    </style>

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
                            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>
                                <?php cart_numbers(); ?></sup></a>
                        </li>
                   

                    </ul>
                    
                </div>
            </div>
        </nav>
        <!-- caliing fucntions -->
        <?php
        cart();
        
        
        ?>

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
          <div class="container">
            <div class="row">
                <table class="table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Product title</th>
                            <th>product image</th>
                            <th> quantity</th>
                            <th> total price</th>
                            <th>remove</th>
                            <th> operations</th>
                        </tr>
                        <tbody>
                            <!-- php code -->
                            <?php
                            global $con;
                            $get_ip_add = getIPAddress();
                            $total_price = 0;
                            $cart_query = "select * from `cart_details`  where ip_address =  '$get_ip_add' ";
                            $results = mysqli_query($con, $cart_query);
                            
                            while ($row = mysqli_fetch_array($results)) {
                                $product_id = $row['product_id'];
                                $select_products = "select * from `products`  where product_id =  '$product_id' ";
                            $results_products = mysqli_query($con, $select_products);
                          
                            while ($row_product_price = mysqli_fetch_array($results_products)) {
                                $product_price = array($row_product_price['product_price']);
                                $product_title = $row_product_price['prodcut_title'];
                                $price_table = $row_product_price['product_price'];
                                $product_image1 = $row_product_price['product_image1'];
                                $product_values = array_sum($product_price );
                                $total_price +=   $product_values;
                        
                        
                          
                            
                            
                            
                            
                            ?>







                            <tr>
                                <td> <?php echo  $product_title ?>  </td>
                                <td><img src="./images/<?php echo   $product_image1 ?>" class="cart-image"></td>
                                <td><input type="text"></td>
                                <td><?php echo  $price_table ?></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <p> update cart</p>
                                    <p> remove cart</p>
                                </td>
                            </tr>
                      
                      <?php  }
                        
                        
                        
                    }
                                 
                    ?>
                    
                    
                    
                        </tbody>
                    </thead>
                </table>
                <div class="d-flex">
                    <h4 class="px-3">Subtotal: <strong class="text-info"> <?php echo $total_price ?></strong></h4>
                    <a href="index.php"><button class="bg-info px-3"> continue shopping</button></a>
                    <a href="#"><button class="bg-info px-3"> check out </button></a>
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