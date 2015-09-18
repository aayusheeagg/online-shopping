<?php 

include('includes/db.php');
$get_id=$_GET['product_id'];


mysql_query("delete  from products where product_id='$get_id'")or die(mysql_error());
header('location:products.php');
?>