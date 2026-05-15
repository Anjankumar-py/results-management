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
            <th>Hall Ticket</th>
            <th>Name</th>
            <th>Telugu</th>
            <th>Eng\lish</th>
            <th>Maths</th>
            <th>Science</th>
            <th>Social</th>
            <th>Total</th>
            <th>Percentage</th>
            <th>Action</th>
        </tr>
<?php
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total = $row['telugu'] + $row['english'] + $row['maths'] + $row['science'] + $row['social'];
        $percentage = $total / 5;
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['hallticket'] . "</td>";
        echo "<td>" . $row['student_name'] . "</td>";
        echo "<td>" . $row['telugu'] . "</td>";
        echo "<td>" . $row['english'] . "</td>";
        echo "<td>" . $row['maths'] . "</td>";
        echo "<td>" . $row['science'] . "</td>";
        echo "<td>" . $row['social'] . "</td>";
        echo "<td>" . $total . "</td>";
        echo "<td>" . number_format($percentage, 2) . "%</td>";
        echo "<td><a href='update_result.php?id=" . $row['id'] . "'>Update</a> | <a href='delete_result.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='11'>No student results found.</td></tr>";
}
?>

    </table>

    <a href="index.php">Back</a>
</div>

</body>
</html>