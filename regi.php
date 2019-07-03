<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

//create connection

$con= mysqli_connect($servername, $username, $password, $dbname);

//check connection
if ($con->connect_error) {
    die("Connection failed: " .$con->connect_error);
} 

if (isset($_POST['name']))
{
	$name=$_POST['name'];
	$fathername=$_POST['fathername'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$phoneno=$_POST['phone'];

$dur = mysqli_query($con, "INSERT INTO studentdetails(name, fathername, address, gender, country, email, phoneno) VALUES ('$name','$fathername','$address','$gender','$country','$email','$phoneno')");

if ($dur) {
	echo "Data insert successfully";
}
else
{
	echo "ERROR:".mysqli_error($con);
}
}
?>
			