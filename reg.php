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
$gender=$_POST['radio'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$blood_group=$_POST['blood_group'];
$mail=$_POST['mail'];
$area=$_POST['area'];
$sql = "INSERT INTO reg (name,gender,age,mobile,blood_group,mail,area) VALUES ('$name','$gender','$age','$mobile','$blood_group','$mail','$area')";
header('Location: registration.php');
if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
  
} else 
{
	
}
$conn->close();
?>
