<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dregi";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$mobileNumber = $_POST['mobileNumber'];
$email = $_POST['email'];
$address = $_POST['address'];


$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);




$sql = "INSERT INTO registration (first_name, last_name, course, gender, mobile_number, email, address, photo)
        VALUES ('$firstName', '$lastName', '$course', '$gender', '$mobileNumber', '$email', '$address', '$targetFile')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
