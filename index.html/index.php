<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online | add products</title>
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








    <!-- make avery thinks in midlle -->
    <center>
        <!-- id and class use to control them from css while id in php -->
    <div class="main">
        <!-- enctype="multipart/form-data" هذا الجزء لازم نكتبوا لان عنحمل صورة  -->
        <form action="insert.php" method="POST" enctype="multipart/form-data">

        <h1>Online Store</h1>
        <img src="https://img.freepik.com/premium-vector/online-shopping-logo-design-template-digital-shopping-logo-mouse-cursor-cart-concepts_502185-286.jpg" width="400" alt="logo"><br><br>
        <label>Product Name </label>
        <input type="text" name="name">
        <br>
        <label >Product Price</label>
        <input type="text" name="price">
        <br>
        <!-- in this input we hide the input by using style display none untile that the user will click the label -->
        <input type="file" id="file" name="image" style="display: none;">
        <label for="file" id="file"  >Shose Product Photo</label>
        <button name="upload">✅upload</button><br><br>
        <a href="product.php"> Show Products</a>
        </form>
    </div>
    <p>Developer by Obay Ali</p>

    </center>
</body>
</html>