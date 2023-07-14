 <?php

include('convig.php');

if(isset($_POST['upload'])){

    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    // نكتب فايل لان عنتعامل مع ملف صورة او فديو ما نص!
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    // راح ننشئ فولدر باسم image حتئ يخزن الصور
    $image_up = "image/".$image_name;
    $insert = "insert into prod (name, price, imag) values ('$NAME', '$PRICE', ' $image_up')";
   
    mysqli_query($con,$insert);
   
    header('location:index.php');
    // if(move_uploaded_file($image_location,'image/'.$image_name)){
    //     // كود بجافا سكربت حتئ ينبهنا علئ نجاح برفع الصورة
    //     echo "<script>alert('prodect uploade successes !')</script>";
    // }
    // else
    // {
    //     echo "<script>alert('prodect uploade filed !')</script>";
    // }
    // header('insert.php');
}

?> 

