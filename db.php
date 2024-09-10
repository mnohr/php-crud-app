<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple_crud";

//create a connection
$conn = new mysqli($servername,$username,$password,$database);

//check the connection
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}else{
    echo "connection successfull";
}
?>