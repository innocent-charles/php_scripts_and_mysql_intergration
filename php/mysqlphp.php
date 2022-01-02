<?php
$servername="localhost";
$username="root";
$password="";
$database="info_student";
$connection=mysqli_connect($servername,$username,$password,$database);
if(mysqli_connect_error())
{
	die("Connection Failed");
} 
else
{
	$sql="INSERT INTO student VALUES(6,'Paul')";
	$sql_fetch="SELECT * FROM student";
	$result=$connection->query($sql_fetch);
while($row=mysqli_fetch_array($result))
{
	echo $row['id']."<br>";
	echo $row['name']."<br>";

}	
}

?>