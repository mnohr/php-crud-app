<?php
include 'db.php';

$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name' , email='$email' WHERE id=$id";

    if($conn->query($sql) === TRUE){
        header("Location: index.php"); // Redirect to list after update
    }else{
        echo "error updating record:".$conn->error;
    }
}else{
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form action="" method="post">
        Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
        <input type="submit" value="update">
    </form>
</body>
</html>