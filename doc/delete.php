<?php
require_once '../connect.php';
$id=$_REQUEST['id'];
$table=$_REQUEST['table'];
$query = "DELETE FROM $table WHERE id='".$id."'"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
// header("Location: view.php"); 
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>