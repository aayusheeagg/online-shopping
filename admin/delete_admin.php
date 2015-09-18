<?php 

include('includes/db.php');
$get_id=$_GET['admin_id'];


mysql_query("delete from admin where admin_id='$get_id'")or die(mysql_error());
header('location:personnel.php');
?>