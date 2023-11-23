<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$firstname=$_POST['firstname'];
$password=$_POST['password'];

$sql = "SELECT firstname, lastname, dob, gender, fathername, mothername, fathermobilenumber, mothermobilenumber, address, password FROM personaldetails where firstname = '$firstname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
    if($password == $row['password']){
        $firstname = $row['firstname']; 
        $lastname = $row['lastname']; 
        $dob = $row['dob']; 
        $gender = $row['gender']; 
        $fathername = $row['fathername']; 
        $mothername = $row['mothername'];
        $fathermobilenumber = $row['fathermobilenumber'];
        $mothermobilenumber = $row['mothermobilenumber'];
        $address = $row['address'];
    }else{
        echo "Password is invalid";
		exit();
    }
}else {
    echo "No user found with the provided credentials";
    exit();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Registration Form</title>
        <link rel="stylesheet" href="stylesheet1.css">
        <script src="main.js"></script> 
    </head>
    <body>
        <div id="main">
            <div class="img">
                <img src="sourceimage/logo1.jpeg" alt="Logo" width="150" height="40" id="logo">
            </div>
            <div class="container1">
                <div class="left-image">
                    <img src="sourceimage/img5.jpg" alt="Left Image">
                </div>
                <div class="middle">
                    <div class="title">
                        <i><span class="greeting">WELCOME</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="php"><?php echo $firstname; ?>!!!</span></i>
                    </div>
                    <div class="data">
                        <div class="data1">
                            <span class="material-icons">badge</span><label>First Name:</label>
                            <span class="d"><?php echo $firstname;?></span>
                        </div>
                        <div class="data2">
                            <span class="material-icons">badge</span><label>Last Name:</label>
                            <span class="d"><?php echo $lastname;?></span>
                        </div>
                        <div class="data3">
                            <span class="material-icons">calendar_month</span><label>Dob:</label>
                            <span class="d"><?php echo $dob;?></span>
                        </div>
                        <div class="data4">
                            <span class="material-icons">person</span><label>Gender:</label>
                            <span class="d"><?php echo $gender;?></span>
                        </div>
                        <div class="data5">
                            <span class="material-icons">man</span><label>Father's Name:</label>
                            <span class="d"><?php echo $fathername;?></span>
                        </div>
                        <div class="data6">
                            <span class="material-icons">woman</span><label>Mother's Name:</label>
                            <span class="d"><?php echo $mothername;?></span>
                        </div>
                        <div class="data7">
                            <span class="material-icons">contact_phone</span><label>Father's Mobile Number:</label>
                            <span class="d"><?php echo $fathermobilenumber;?></span>
                        </div>
                        <div class="data8">
                            <span class="material-icons">contact_phone</span><label>Mother's Mobile Number:</label>
                            <span class="d"><?php echo $mothermobilenumber;?></span>
                        </div>
                        <div class="data9">
                            <span class="material-icons">home</span><label>Address:</label>
                            <span class="d"><?php echo $address;?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const dataElements = document.querySelectorAll('.data span');
            dataElements.forEach((element, index) => {
                setTimeout(() => {
                    element.style.display = 'inline-block';
                }, index * 500);
            });
        </script>
    </body>
</html>





