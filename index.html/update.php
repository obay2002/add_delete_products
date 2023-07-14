<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online | update</title>
    <!-- stylesheet means the relationship between this page and the link is to control the view of it -->
    <link rel="stylesheet" href="index.css">
  
</head>
<body>

<?php
include('convig.php');
$id = $_GET['id'];
$up = mysqli_query($con,"select * from prod where id=$id");
$data = mysqli_fetch_array($up);


?>
<header>
        <div class="constrian">
        <nav>
            <ul>
                <li><a href="product.php">Products</a></li>
                <li><a href="index.php">Add Itam</a></li>
                
            </ul>
        </nav>
        </div>
    </header>

    <!-- make avery thinks in midlle -->
    <center>
        <!-- id and class use to control them from css while id in php -->
    <div class="main">
        <!-- enctype="multipart/form-data" هذا الجزء لازم نكتبوا لان عنحمل صورة  -->
        <form action="up.php" method="POST" enctype="multipart/form-data">

        <h1>Update Products</h1>
        <label >Product Id ..</label>
        <input type="text" name="id" value='<?php echo $data['id'] ?>'>
        <br>
        <label>Product Name </label>
        <input type="text" name="name" value='<?php echo $data['name'] ?>'>
        <br>
        <label >Product Price</label>
        <input type="text" name="price" value='<?php echo $data['price'] ?>'>
        <br>
        <!-- in this input we hide the input by using style display none untile that the user will click the label -->
        <input type="file" id="file" name="image" style="display: none;">
        <label for="file" id="file"  >update Product Photo</label>
        <button name="update" type="submit">✅update products</button><br><br>
        
        </form>
    </div>
    <p>Developer by Obay Ali</p>

    </center>
</body>
</html>