<?php
require_once '../connect.php';
$table=$_REQUEST['table'];
if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $query = "DELETE FROM $table WHERE ID='".$id."'"; 
}
else {
    $query = "DELETE FROM $table"; 
}
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>