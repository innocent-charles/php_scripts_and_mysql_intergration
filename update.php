<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Update Information</title>
</head>
<body>
 <div class="row mt-3">
 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
 <h3>Click on the "Edit Info" to update the Employee's Information</h3>
 <table class="table table-bordered table-hover table-striped mt-4">
 <thead>
 <th>Emp No</th> 
 <th>Emp Name</th> 
 <th>Update Details</th>
 </thead>
<?php 
$conn = mysqli_connect("localhost", "root", "", "info_employee");
if(mysqli_connect_error()) 
{
        die("Connection can't be established");
} 
else 
{     
 $sql = "SELECT empno, eFname, eLname FROM Employee";
 $result = mysqli_query($conn, $sql);	
 }  
while($row = mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>" . $row['empno'] . "</td>";
echo"<td>" . $row['eFname']. " " . $row['eLname'] . "</td>";
echo"<td><a href=\"edit_employee_info.php?id=". $row['empno'] ."\">Edit Info</td>";
echo"</tr>";
}
?>
</table>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

