<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$telugu = $_POST['telugu'];
$english = $_POST['english'];
$maths = $_POST['maths'];
$science = $_POST['science'];
$social = $_POST['social'];

$update = "UPDATE students SET
telugu='$telugu',
english='$english',
maths='$maths',
science='$science',
social='$social'
WHERE id=$id";

mysqli_query($conn,$update);

header("Location: admin_dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Result</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Update Result</h2>

<form method="POST">

<input type="number"
name="telugu"
value="<?php echo $row['telugu']; ?>">

<input type="number"
name="english"
value="<?php echo $row['english']; ?>">

<input type="number"
name="maths"
value="<?php echo $row['maths']; ?>">

<input type="number"
name="science"
value="<?php echo $row['science']; ?>">

<input type="number"
name="social"
value="<?php echo $row['social']; ?>">

<button type="submit"
name="update">
Update Result
</button>

</form>

</div>

</body>
</html>