<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//storing inputs with php variables
$stmt = $conn->prepare("INSERT INTO personaldetails(firstname, lastname, dob, gender, fathername, mothername,fathermobilenumber, mothermobilenumber, address, password) VALUES (?, ?, ?,?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssiiss", $firstname, $lastname, $dob, $gender, $fathername,$mothername, $fathermobilenumber, $mothermobilenumber, $address, $password);

$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$dob = $_POST['dob']; 
$gender = $_POST['gender']; 
$fathername = $_POST['fathername']; 
$mothername = $_POST['mothername'];
$fathermobilenumber = $_POST['fathermobilenumber'];
$mothermobilenumber = $_POST['mothermobilenumber'];
$address = $_POST['address'];
$password = $_POST['password'];

if ($stmt->execute()) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


