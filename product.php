<?php 

require "lib/conn.php";
if(isset($_POST["createproduct"])){
  $product_name = $_POST["product_name"];
  $price = $_POST["price"];
  $description = $_POST["description"];
  mysqli_query($con, "INSERT INTO `products`(`product_name`, `price`, `description`) VALUES ('$product_name', '$price', '$description')");
}

$res_product = mysqli_query($con,"SELECT * FROM `products` ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container text-center">
        <h1>Welcome to Product page</h1></div>
    <div class ="container-sm">
        
    <form action="" method="post" style = "width:700px; margin: auto;">
    <input type ="hidden" name = "createproduct">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Product Name</label>
    <input type="text" class="form-control" style = "outline: purple;" name ="product_name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label ">Product Price</label>
    <input type="text" class="form-control" style = "outline: purple;" name ="price" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-floating">
    
     <p>Description</p><textarea class="form-control"   name ="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 170px;"></textarea>
     
    </div>
    <br>

  <button type="submit" class="btn btn-outline-primary">Submit</button>
  <a class="btn btn-outline-success" href="showdata.php" name ="showdata">Show Data</a>

</form>

</div>
</body>
</html>