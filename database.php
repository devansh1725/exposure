<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
$sql="CREATE DATABASE event";
if($conn->query($sql)==true)
{
echo "database created succesfully";
}
else {
echo"error creating database".$conn->error;
}
$conn->close();

?>