<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if($conn->query($sql) === TRUE){
    header("Location: index.php"); // redirect to list after deletion

}else{
    echo "error deleting record".$conn->error;
}
?>