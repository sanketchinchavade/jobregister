<?php 
 include 'connection.php';
$id = $_GET['id'];
$deletequery = " delete from jobregistration where id = $id ";
 $query = mysqli_query ($con,$deletequery );
header('location:display.php');
?>