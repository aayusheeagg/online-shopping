<?php 

include('includes/db.php');
$get_id=$_GET['supplier_id'];


mysql_query("delete  from suppliers where supplier_id='$get_id'")or die(mysql_error());
header('location:suppliers.php');
?>