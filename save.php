<?php

$name = $_POST["name"];
// $lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "data") or die("connection failed");
$sql = "INSERT INTO data_table(name, email, mobile,message) VALUES ('{$name}','{$email}','{$mobile}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: contact.php");
mysqli_close($conn);
?>