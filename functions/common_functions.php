<?php



include('./includes/connect.php');

//fetching categories
function getcategories()
{






    global $con;

    $select_categories = "select * from categories";
    $results_categories = mysqli_query($con, $select_categories);



    while ($row_data = mysqli_fetch_assoc($results_categories)) {
        $category_title = $row_data['category_title'];
        $catgory_id = $row_data['catgory_id'];
        echo "<li class='nav-item '>
        <a href='index.php?categories=$catgory_id' class='nav-link text-light'>
        $category_title
      


        </a>
    </li>";
    }
}
//get unique bransds

function getuniquebrands()
{
    global $con;


    if (isset($_GET['brand'])) {
        $brand_id = $_GET['brand'];




        $select_products = "select * from   `products` WHERE  brand_id =$brand_id ";
        $results_products = mysqli_query($con, $select_products);
        $num_of_rows = mysqli_num_rows($results_products);



        if ($num_of_rows == 0) {

            echo "<h2 class='text-center text-danger'> no record for this brand</h2>";
        }



        while ($row_data = mysqli_fetch_assoc($results_products)) {
            $product_id = $row_data['product_id'];
            $prodcut_title = $row_data['prodcut_title'];
            $product_description = $row_data['product_description'];
            $product_keyword = $row_data['product_keyword'];
            $catgory_id = $row_data['catgory_id'];
            $brand_id = $row_data['brand_id'];
            $product_price = $row_data['product_price'];

            $product_image1 = $row_data['product_image1'];


            echo " <div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>  $prodcut_title</h5>
            <p class='card-text'> $product_description</p>
            <a href='index.php?add_to_cart= $product_id'class='btn btn-info'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>     </div>

        </div>";
        }
    }
}



function getuniquecate()
{
    global $con;


    if (isset($_GET['categories'])) {
        $category_id = $_GET['categories'];




        $select_products = "select * from   `products` WHERE  catgory_id =$category_id ";
        $results_products = mysqli_query($con, $select_products);
        $num_of_rows = mysqli_num_rows($results_products);



        if ($num_of_rows == 0) {

            echo "<h2 class='text-center text-danger'> no record for this category</h2>";
        }



        while ($row_data = mysqli_fetch_assoc($results_products)) {
            $product_id = $row_data['product_id'];
            $prodcut_title = $row_data['prodcut_title'];
            $product_description = $row_data['product_description'];
            $product_keyword = $row_data['product_keyword'];
            $catgory_id = $row_data['catgory_id'];
            $brand_id = $row_data['brand_id'];
            $product_price = $row_data['product_price'];

            $product_image1 = $row_data['product_image1'];


            echo " <div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>  $prodcut_title</h5>
            <p class='card-text'> $product_description</p>
            <a href='index.php?add_to_cart= $product_id'class='btn btn-info'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>     </div>

        </div>";
        }
    }
}






//get brands
function getbrands()
{


    global $con;

    $select_brands = "select * from brand";
    $results_brands = mysqli_query($con, $select_brands);



    while ($row_data = mysqli_fetch_assoc($results_brands)) {
        $brand_title = $row_data['brand_title'];
        $brand_id = $row_data['brand_id'];
        echo "<li class='nav-item '>
        <a href='index.php?brand=$brand_id' class='nav-link text-light'>
        $brand_title


        </a>
    </li>";
    }
}




//getting produvts

function getProducts()
{
    global $con;
    if (!isset($_GET['categories'])) {
        if (!isset($_GET['brand'])) {


            $select_products = "select * from   `products` order by rand() limit 0,4";
            $results_products = mysqli_query($con, $select_products);



            while ($row_data = mysqli_fetch_assoc($results_products)) {
                $product_id = $row_data['product_id'];
                $prodcut_title = $row_data['prodcut_title'];
                $product_description = $row_data['product_description'];
                $product_keyword = $row_data['product_keyword'];
                $catgory_id = $row_data['catgory_id'];
                $brand_id = $row_data['brand_id'];
                $product_price = $row_data['product_price'];

                $product_image1 = $row_data['product_image1'];


                echo " <div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>  $prodcut_title</h5>
            <p class='card-text'> $product_description</p>
            <p class='card-text'>$product_price</p>
            <a href='index.php?add_to_cart= $product_id'class='btn btn-info'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>     </div>

        </div>";
            }
        }
    }
}
//display all products

function get_all_products()
{


    global $con;
    if (!isset($_GET['categories'])) {
        if (!isset($_GET['brand'])) {


            $select_products = "select * from   `products` order by rand() ";
            $results_products = mysqli_query($con, $select_products);



            while ($row_data = mysqli_fetch_assoc($results_products)) {
                $product_id = $row_data['product_id'];
                $prodcut_title = $row_data['prodcut_title'];
                $product_description = $row_data['product_description'];
                $product_keyword = $row_data['product_keyword'];
                $catgory_id = $row_data['catgory_id'];
                $brand_id = $row_data['brand_id'];
                $product_price = $row_data['product_price'];

                $product_image1 = $row_data['product_image1'];


                echo " <div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>  $prodcut_title</h5>
            <p class='card-text'> $product_description</p>
            <p class='card-text'>$product_price</p>
            <a href='index.php?add_to_cart= $product_id'class='btn btn-info'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>     </div>

        </div>";
            }
        }
    }
}


//search_products
function search_products()
{
    global $con;
    if (isset($_GET['data_product'])) {
        $seach_data = $_GET['search_data'];




        $search_query = "select * from   `products` where product_keyword like '% $seach_data%'";
        $results_products = mysqli_query($con, $search_query);

        $num_of_rows = mysqli_num_rows($results_products);



        if ($num_of_rows == 0) {

            echo "<h2 class='text-center text-danger'> no search results found</h2>";
        }


        while ($row_data = mysqli_fetch_assoc($results_products)) {
            $product_id = $row_data['product_id'];
            $prodcut_title = $row_data['prodcut_title'];
            $product_description = $row_data['product_description'];
            $product_keyword = $row_data['product_keyword'];
            $catgory_id = $row_data['catgory_id'];
            $brand_id = $row_data['brand_id'];
            $product_price = $row_data['product_price'];

            $product_image1 = $row_data['product_image1'];


            echo " <div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>  $prodcut_title</h5>
            <p class='card-text'> $product_description</p>
            <p class='card-text'>$product_price</p>

            <a href='index.php?add_to_cart= $product_id'class='btn btn-info'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>     </div>

        </div>";
        }
    }
}

//view details 

function view_details()
{
    global $con;
    if (isset($_GET['product_id'])) {


        if (!isset($_GET['categories'])) {
            if (!isset($_GET['brand'])) {
                $product_id = $_GET['product_id'];


                $select_products = "select * from   `products` where product_id = $product_id ";
                $results_products = mysqli_query($con, $select_products);



                while ($row_data = mysqli_fetch_assoc($results_products)) {
                    $product_id = $row_data['product_id'];
                    $prodcut_title = $row_data['prodcut_title'];
                    $product_description = $row_data['product_description'];
                    $product_keyword = $row_data['product_keyword'];
                    $catgory_id = $row_data['catgory_id'];
                    $brand_id = $row_data['brand_id'];
                    $product_price = $row_data['product_price'];

                    $product_image1 = $row_data['product_image1'];
                    $product_image2 = $row_data['product_image2'];
                    $product_image3 = $row_data['product_image3'];


                    echo " <div class='col-md-4 mb-2'>
            <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>  $prodcut_title</h5>
                <p class='card-text'> $product_description</p>
                <p class='card-text'>$product_price</p>
                <a href='index.php?add_to_cart= $product_id'class='btn btn-info'>Add to Cart</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>     </div>
    
            </div>
            <div class='col-md-8'>
            <!-- related products -->
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='text-center text-info mb-5'>related products</h4>


                </div>
                <div class='col-md-6'>
                <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='...'>
                </div>
                <div class='col-md-6'>
                <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='...'>
                    </div>
            </div>


        </div>
            
            ";
                }
            }
        }
    }
}
//get ip addreess
function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
// cart_function
function cart()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_ip_add = getIPAddress();
        $get_prod_id = $_GET['add_to_cart'];
        $select_query = "select * from `cart_details`  where ip_address =  '$get_ip_add' and 
            product_id =   $get_prod_id";
        $results_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($results_query);



        if ($num_of_rows > 0) {

            echo "<script> alert('already exits')</script>";
            echo "<script> window.open('index.php','_SELF')</script>";
        } else {

            $insert_query = "insert into  `cart_details` (product_id , ip_address , quantity) 
                values ($get_prod_id ,  '$get_ip_add' ,0  )";
            $result = mysqli_query($con, $insert_query);
            if ($result) {
                echo "<script> alert('item addedd')</script>";
                echo "<script> window.open('index.php','_SELF')</script>";
            }
        }
    }
}
//get_cart numbers

function cart_numbers()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_ip_add = getIPAddress();

        $select_query = "select * from `cart_details`  where ip_address =  '$get_ip_add' ";
        $results_query = mysqli_query($con, $select_query);
        $count_cart = mysqli_num_rows($results_query);
    } else {

        global $con;
        $get_ip_add = getIPAddress();

        $select_query = "select * from `cart_details`  where ip_address =  '$get_ip_add' ";
        $results_query = mysqli_query($con, $select_query);
        $count_cart = mysqli_num_rows($results_query);
    }
    echo   $count_cart;
}

//total price fucntion

function total_cart_price(){
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
        $product_values = array_sum($product_price );
        $total_price +=   $product_values;


    }



    }
     
   
   echo $total_price;
}
