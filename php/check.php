<?php
$servername="localhost";
$username="root";
$password="";
$database="info_student";
$connection=mysqli_connect($servername,$username,$password,$database);
if(mysqli_connect_error())
{
	echo "connection cant be established";
}
else
{
	$sql="CREATE TABLE user(
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(40) NOT NULL,
	password VARCHAR(30),
	reg_data DATE,
);"

$result=$connection->query($sql);

}
if($row->mysqli_fetch())
{

}
$connection->close();
?>