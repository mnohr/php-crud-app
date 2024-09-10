<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name,email) VALUES ('$name','$email')";

    if($conn->query($sql) === TRUE){
        header("Location:index.php"); //redirect to the list after insertion
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
</head>
<body>
    <h2>Create New User</h2>
    <form action="" method="post">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" require><br><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>