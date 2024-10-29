<?php
// save_data.php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sname = $conn->real_escape_string($_POST['sname']);
    $class = $conn->real_escape_string($_POST['class']);
    $email = $conn->real_escape_string($_POST['email']);
    $number = $conn->real_escape_string($_POST['number']);

    $sql = "INSERT INTO student (sname, class, email, number) VALUES ('$sname', '$class', '$email', '$number')";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='alert alert-success'>New record created successfully</p>";
    } else {
        echo "<p class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}


?>
