

<?php
include('../includes/connect.php');

if(isset($_POST['insert_brand'])){

$brands_title = $_POST['brand_name'];

// select cat
$select_query = "select * from   `brand` where  brand_title = ('$brands_title ')";
$result_select = mysqli_query($con ,$select_query );
$number = mysqli_num_rows($result_select);

if($number >0){
  echo "<script> alert('brand already exists')</script>";
} else{



$insert_query = "insert into  `brand` (brand_title) values ('$brands_title ')";
$result = mysqli_query($con ,$insert_query );
if($result){
  echo "<script> alert('brand inserted successfully')</script>";
}
}
}
?>

<form method="POST" class="mb-2"> 
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1" ><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_name" placeholder="Insert brands" 
  aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 m-auto mb-2">
  

<input type="submit" class=" bg-info p-2 my-3 border-0" name="insert_brand" 
value ="Insert brands" >>
 
</div>

</form>