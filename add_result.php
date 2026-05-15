<?php

include 'db.php';

if(isset($_POST['submit'])){

$hallticket = $_POST['hallticket'];
$name = $_POST['student_name'];
$password = $_POST['password'];

$telugu = $_POST['telugu'];
$english = $_POST['english'];
$maths = $_POST['maths'];
$science = $_POST['science'];
$social = $_POST['social'];

$sql = "INSERT INTO students
(hallticket,student_name,password,
telugu,english,maths,science,social)

VALUES

('$hallticket','$name','$password',
'$telugu','$english','$maths',
'$science','$social')";

if(mysqli_query($conn,$sql)){

echo "<script>
alert('Result Added Successfully');
window.location='admin_dashboard.php';
</script>";

}
else{
echo "Error";
}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Result</title>

<link rel="stylesheet"
href="style.css">

</head>

<body>

<div class="container">

<h1>Add Student Result</h1>

<form method="POST">

<input type="text"
name="hallticket"
placeholder="Hall Ticket Number"
required>

<input type="text"
name="student_name"
placeholder="Student Name"
required>

<input type="password"
name="password"
placeholder="Student Password"
required>

<input type="number"
name="telugu"
placeholder="Telugu Marks"
required>

<input type="number"
name="english"
placeholder="English Marks"
required>

<input type="number"
name="maths"
placeholder="Maths Marks"
required>

<input type="number"
name="science"
placeholder="Science Marks"
required>

<input type="number"
name="social"
placeholder="Social Marks"
required>

<button type="submit"
name="submit">

Add Result

</button>

</form>

<br>

<a href="admin_dashboard.php">
Back to Dashboard
</a>

</div>

</body>
</html>