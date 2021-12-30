<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Remove Data From database</title>
</head>
<body>
<div class="row text-center mt-3">
<h2>Select Employee to Remove From the Table</h2>
</div>
<div class="row mt-3">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
<h3>Select Employee No</h3>
<form class="form mt-5" method="POST" action="remove.php" role="form">
<div class="form-group">
<select class="form-control" name="empno">
<option selected disabled>Choose</option>
<?php
$conn = mysqli_connect("localhost", "root", "", "info_employee");
    if($_SERVER["REQUEST_METHOD"] == "POST" ) 
    {
        $del = $_POST["empno"];
        $sql = "DELETE FROM Employee WHERE empno=$del";
        if($conn->query($sql) == TRUE) {
            echo "<script> alert(\"Employee information Delete Successfully!\") </script>";
        } 
        else 
        {
            echo "Employee is not Deleted";
        }
    }
    if(mysqli_connect_error()) 
    {
        echo "<script>alert(\"Connection Error!\")</script>";
    }
    $sql = "SELECT empno FROM Employee";
    $result = mysqli_query($conn, $sql);
                        while($info = mysqli_fetch_array($result)) {
                            echo "<option value=". $info['empno'] . ">" . $info['empno'] . "</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group text-center mt-3">
                <input type="submit" class="form-control btn btn-danger" value="DELETE" style="width: 30%;">
            </div>
        </form>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>