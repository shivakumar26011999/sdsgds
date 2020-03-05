<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tweets";

$conn=mysqli_connect("localhost","root","","tweets");
if($conn->connect_error)
{
   die("Connection failed:".$conn->connect_error);
}
$a=$_POST["Name"];
$b=$_POST["Email"];
$c=$_POST["Password"];
$d=$_POST["DOB"];
$e=$_POST["Gender"];

$sql="INSERT INTO registration VALUES('$a','$b','$c','$d','$e')";
if($conn->query($sql)===TRUE)
{
	echo "new record created successfully";
}
else{
	echo "Error.".$sql."<br>".$conn->error;
}
$conn->close();
?>