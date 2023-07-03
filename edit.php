<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    
    $sql = "UPDATE records SET name='$name', address='$address' WHERE id='$id'";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
} else {
   
    $id = $_GET['id'];
    $sql = "SELECT * FROM records WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 align ="center"><u>Edit Record</u></h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>

        <label for="address">Address:</label>
        <input type="address" name="address" value="<?php echo $row['address']; ?>" required><br>

        <input type="submit" value="Update Record">
    </form>
</body>
</html>