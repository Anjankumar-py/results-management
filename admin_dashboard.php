<?php
include 'db.php';

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Admin Dashboard</h1>

<a href="add_result.php">
Add Result
</a>

<table>

<tr>
<th>ID</th>
<th>Hallticket</th>
<th>Name</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['hallticket']; ?></td>

<td><?php echo $row['student_name']; ?></td>

<td>

<a href="update_result.php?id=<?php echo $row['id']; ?>">
Update
</a>
<a href="delete_result.php?id=<?php echo $row['id']; ?>">
/ Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>