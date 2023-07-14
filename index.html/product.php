<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online | View products</title>
    <!-- stylesheet means the relationship between this page and the link is to control the view of it -->
    <link rel="stylesheet" href="index.css">
  
</head>
<body>
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

<center>

<h2> Products</h2><br><br>

</center>

<?php
include('convig.php');
$result = mysqli_query($con,'SELECT * from prod');
while($row = mysqli_fetch_array($result) ){
    echo "
<center>
    <main>
        <div class='card' style='width: 15rem;'>
            <img src='$row[imag]' class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='delete.php? id=$row[id]' class='btn btn-danger' >Delete product</a><br><br>
            
            <a href='update.php? id=$row[id]' class='btn btn-primary'>Update product</a>
            </div>
        </div>
    </main>
<center>
    
    ";
}

?>





    </body>