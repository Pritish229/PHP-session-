<?php 
require "lib/conn.php";
$product_id = $_GET['product_id'];
$query_product = mysqli_query($con,"SELECT * FROM products WHERE product_id = $product_id");
$product  = mysqli_fetch_object($query_product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container" style ="max-width:40%">
    <h1>Showing the data of <?php print_r($product->product_name); ?> </h1>
    <Label>Product name :</Label> <?php print_r($product->product_name); ?>
    <br>
    <Label>Product price :</Label> <?php print_r($product->price); ?>
    
    <br>
    <Label>Product description :</Label> <?php print_r($product->description); ?>
    <br>
    <br>
    <a class="btn btn-outline-success" href="showdata.php" name ="showdata">Show all Data</a>
    </div>
</body>
</html>