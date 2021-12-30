<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Displaying the Information from the database</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <div class="row text-center">
    <h1>Employee Information</h1>
  </div>
<table class="table table-bordered table-hover mt-5"> 
  <thead>
    <th>ID</th>
    <th>Firt Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Post</th>
    <th>Salary</th>
  </thead>
<?php
$con = mysqli_connect("localhost","root","","info_customer");
if(mysqli_connect_error())
{
  die("Connection can't be established");
}
else
{
  $sql="SELECT * FROM Customer";
  $result=mysqli_query($con,$sql);
}
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id']  . "</td>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Hometown']   . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
  }
mysql_close($con);
?>
</table>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

