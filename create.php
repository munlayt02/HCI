<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];


    $sql = "INSERT INTO records (name, address) VALUES ('$name', '$address')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Record</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 align = "center"><u>Add New Record</u></h2>
    <form class ="crud-form" method="POST" action="">
        <label for="name">Name</label>
        <input type="text" name="name" required><br>

        <label for="address">Address</label>
        <input type="text" name="address" required><br>

        <button type ="submit" name = "save" class = "button"> Save </button>
    </form>
</body>
</html>