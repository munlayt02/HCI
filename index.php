<?php
include 'config.php';
$sql = "SELECT * FROM records";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>C.R.U.D</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 align = "center"><u>Records</u></h2><br>
    <table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
		<a href="create.php">Add New Record</a>
    </table>
</body>
</html>