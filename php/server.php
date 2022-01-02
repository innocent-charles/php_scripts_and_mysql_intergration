<?php
$cokies_name="user";
$cokies_value="Innocent Website";
setcookie($cokies_name , $cokies_value);  //set cookie !!!.
session_start(); //here we decleare the session  !!!.
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		<label for="name">Name</label>
		<input type="text" name="name" id="Name" placeholder="Enter name" value="<?php echo $name; ?>"><br>
		<input type="submit">
	</form>
<?php

if(count($_COOKIE) > 0) 
{
  echo "Cookies are enabled.";
} 
else 
{
  echo "Cookies are disabled.";
}

if(isset($_COOKIE['cokies_name']))
{
	echo "The cookies".$cokies_name . "is not set";
}
else
{
	echo "The cookies is set";	
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=$_REQUEST['name'];
	if($name=="")
	{
		echo "No Name Entered";
	}

	else
	{
		echo "The name entered is :".$name;
	}
} 

?>


</body>
</html>