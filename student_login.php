<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

$hallticket = $_POST['hallticket'];
$password = $_POST['password'];

$sql = "SELECT * FROM students
WHERE hallticket='$hallticket'
AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$_SESSION['hallticket']=$hallticket;

header("Location:student_dashboard.php");

}
else{
echo "Invalid Login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Student Login</h2>

<form method="POST">

<input type="text"
name="hallticket"
placeholder="Hall Ticket"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit"
name="login">
Login
</button>

</form>

</div>

</body>
</html>