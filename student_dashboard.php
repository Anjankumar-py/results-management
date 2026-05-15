<?php
session_start();
include 'db.php';

$hallticket = $_SESSION['hallticket'];

$sql = "SELECT * FROM students
WHERE hallticket='$hallticket'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$total =
$row['telugu'] +
$row['english'] +
$row['maths'] +
$row['science'] +
$row['social'];

$percentage = $total / 5;
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Welcome <?php echo $row['student_name']; ?></h1>

<table>

<tr>
<th>Hall Ticket</th>
<td><?php echo $row['hallticket']; ?></td>
</tr>

<tr>
<th>Telugu</th>
<td><?php echo $row['telugu']; ?></td>
</tr>

<tr>
<th>English</th>
<td><?php echo $row['english']; ?></td>
</tr>

<tr>
<th>Maths</th>
<td><?php echo $row['maths']; ?></td>
</tr>

<tr>
<th>Science</th>
<td><?php echo $row['science']; ?></td>
</tr>

<tr>
<th>Social</th>
<td><?php echo $row['social']; ?></td>
</tr>

<tr>
<th>Total</th>
<td><?php echo $total; ?></td>
</tr>

<tr>
<th>Percentage</th>
<td><?php echo $percentage; ?>%</td>
</tr>

</table>

<a href="logout.php">Logout</a>

</div>

</body>
</html>