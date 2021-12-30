<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="row text-center">
<h1>FORM TO INSERT DATA INTO DATABASE</h1>
</div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form class="form" action="?php $PHP_SELF ?" method="POST" role="form">
                <div class="form-group mt-3">
                        <label for="first_name">First Name:</label>
                        <input class="form-control" type="text" id="first_name" name="first_name" placeholder="Enter first name">
                </div>
                <div class="form-group mt-4">
                        <label for="last_name">Last Name:</label>
                        <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Enter last name">
                </div>
                <div class="form-group mt-4">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group mt-4">
                        <label for="post">Position:</label>
                        <input class="form-control" type="text" id="post" name="post" placeholder="Enter Position">
                </div>
                <div class="form-group mt-4">
                       <label for="salary">Salary:</label>
                        <input class="form-control" type="text" id="salary" name="salary"  placeholder="Enter Salary">
                </div>
                <div class="row mt-5">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <input type="submit" class="form-control btn-success" value="SUBMIT">
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
                </div>
            </form>
        </div>
    </div>
<?php
    $conn = mysqli_connect("localhost", "root", "", "info_employee");
    if(mysqli_connect_error()) {
        die("Connection can't be established");
    }
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $first_name = "'" . $_POST["first_name"] ."'";
        $last_name = "'" . $_POST["last_name"] ."'";
        $email = "'" . $_POST["email"] ."'";
        $post = "'"  . $_POST["post"] ."'";
        $salary = "'" . $_POST["salary"] ."'";
        $sql = "INSERT INTO Employee (eFname, eLname, eEmail, post, salary) VALUES ($first_name, $last_name, $email, $post, $salary)";
        if ($conn->query($sql) === TRUE) 
        {
            echo "<script> alert(\"Successfully\") </script>";
        } 
        else 
        {
            echo "failed to insert data";
        }
    }
mysql_close($conn);
?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>