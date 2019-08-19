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
$till_date=$_POST['till_date'];
$details=$_POST['details'];
$sql = "INSERT INTO req (name,gender,age,mobile,blood_group,mail,till_date,details) VALUES ('$name','$gender','$age','$mobile','$blood_group','$mail','$till_date','$details')";
header('Location: requests.php');
if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
  
} else 
{
	
}
$conn->close();
?>