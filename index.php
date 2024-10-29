<?php 
// index.php
include 'db_connection.php';
include 'save_data.php';

// Fetch data from the database
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Student Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to the external JavaScript file -->
    <script src="validation.js" defer></script>
    <style>
        body {
            background-image: url('images/images.jpeg'); /* Replace with your wallpaper URL */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .glassmorphism {
            background: rgba(255, 255, 255, 0.2); /* Light background with transparency */
            backdrop-filter: blur(10px); /* Blur effect */
            border-radius: 15px; /* Rounded corners */
            padding: 20px; /* Padding */
            border: 1px solid rgba(255, 255, 255, 0.3); /* Border with transparency */
        }
        h2 {
            color: white; /* Change h2 color to white */
        }
    </style>
</head>
<body>

<div class="container mt-5 d-flex justify-content-center align-items-center">
    <div class="glassmorphism col-md-8">
        <h2 class="mb-4 text-center">Student Form</h2>

        <form method="POST" action="index.php">
            <div class="mb-3">
                <label for="sname" class="form-label">Name:</label>
                <input type="text" id="sname" name="sname" class="form-control" required onblur="validateName()">
                <div id="nameError" class="text-danger"></div>
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Class:</label>
                <input type="text" id="class" name="class" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required onblur="validateEmail()">
                <div id="emailError" class="text-danger"></div>
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Phone Number:</label>
                <input type="text" id="number" name="number" class="form-control" required onblur="validatePhoneNumber()">
                <div id="phoneError" class="text-danger"></div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

<div class="container mt-5">
    <h2 class="mt-5 text-center">Student Records</h2>
    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>{$row['sname']}</td><td>{$row['class']}</td><td>{$row['email']}</td><td>{$row['number']}</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No records found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
