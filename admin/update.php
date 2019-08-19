<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST['name'];
$address=$_POST['street'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$groupa=$_POST['radio'];
$sql = "UPDATE `bdata` SET `address`='$address',`dob`='$dob',`phone`='$phone',`mobile`='$mobile',`mail`='$mail',`blood_group`='$groupa' WHERE name='$name'";
header('Location: update-data.php');
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
  
} else 
{
	
}
$conn->close();
?>