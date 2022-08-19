<?php 

require"lib/conn.php";
    $query = mysqli_query($con,"SELECT * FROM `products` ORDER BY  `product_id`"); 
    $dataobject = mysqli_fetch_object($query);

    if (isset($_GET["delproduct_id"])) {
        $product = $_GET["delproduct_id"];
        mysqli_query($con,"DELETE FROM `products` WHERE `product_id` = '$product' " );
        header('Location:'.$_SERVER['PHP_SELF']); 
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Show Data</title>
</head>
<body>
    <div class="container col-lg-6">
    <h1 class = "text-center">Data Table</h1>
    <table class="table table-bordered border-primary ">
        <tr>
            <td> <b> Product Number </b> </td>
            <td> <b> Product Name </b> </td>
            <td> <b> Product Price </b> </td>
            <td> <b> Product Detils </b> </td>
            <td> <b> Product Delete </b> </td>
            <td> <b> Product Update </b> </td>

        </tr>
    <?php 
        $i = 1;
        while($row = mysqli_fetch_object($query)){

    ?>
        <tr>
            <td class = "text-center"> <?php echo $i ;?> </td> </td>
            <td class = "text-center"> <?php echo $row->product_name ;?> </td> </td>
            <td class = "text-center"> <?php echo $row->price ;?> </td> </td>
            <td class = "text-center"> <a href="productdetils.php?product_id=<?php echo $row->product_id ;?>">Product detils</a> </td> </td>
            <td class = "text-center"> <a class="btn btn-outline-danger" href="?delproduct_id=<?php echo $row->product_id ;?>">Delete</a> </td>
            <td class = "text-center"> <a class="btn btn-outline-success" href="updateproduct.php?product_id=<?php echo $row->product_id ;?> " name ="update">Update</a></td>
            </tr>
        <?php 
            $i++;
        }
        ?>
    </table>
    Got To Product Insert Page <a href="product.php">Product page</a>
    </div>
</body>
</html>