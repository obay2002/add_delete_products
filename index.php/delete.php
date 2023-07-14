<?php

include('convig.php');
$ID = $_GET['id'];
// نخلي ""دبل
mysqli_query($con,"delete from prod where id=$ID");
header('location:product.php');
?>