<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Results</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Subject</th>
            <th>Marks</th>
            <th>Action</th>
        </tr>
<?php
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['student_name'] . "</td>";
        echo "<td>" . $row['roll_no'] . "</td>";
        echo "<td>" . $row['subject'] . "</td>";
        echo "<td>" . $row['marks'] . "</td>";
        echo "<td><a href='edit_result.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete_result.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
}
?>

    </table>

    <a href="index.php">Back</a>
</div>

</body>
</html>