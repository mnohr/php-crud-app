<?php
include 'db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>
<body>
    <h2>Users List</h2>
    <a href="create.php">create new user</a><br><br>
    <table border="1">
        <tr>
            <th> ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php 
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                echo "<tr> 
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td><a href='update.php?id={$row['id']}'>Edit</a> | 
                <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
                </tr>
                ";
            }
        }else {
            echo "<tr><td colspan='4'>No user Found</td><tr>";
        }
        ?>
    </table>
    
</body>
</html>