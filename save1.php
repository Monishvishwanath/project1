<?php
// Database connection variables
$host = 'localhost';
$db = 'data4';
$user = 'root'; // Change this to your database username
$pass = ''; // Change this to your database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $tags = $_POST['tags'];
    $role = $_POST['role']; // Value will be either 'mentor' or 'mentee'

    // Prepare SQL based on the radio button selection
    if ($role === 'mentor') {
        // Insert data into mentors table
        $sql = "INSERT INTO datt (name, designation, tags) VALUES ('$name', '$designation', '$tags')";
        if ($conn->query($sql) === TRUE) {
            echo "Mentor data inserted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif ($role === 'mentee') {
        // Insert data into mentees table
        $sql = "INSERT INTO datt (name, designation, tags) VALUES ('$name', '$designation', '$tags')";
        if ($conn->query($sql) === TRUE) {
            echo "Mentee data inserted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the connection
$conn->close();
?>
