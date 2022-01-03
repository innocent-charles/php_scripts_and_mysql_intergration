<?php
$cookie_name='user';
$cookie_value=1;
setcookie($cookie_name,$cookie_value);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cookies PHP</title>
</head>
<body>
	<?php
	if(!isset($_COOKIE['user']))
	{
       echo "Firt time visiting the site";
	} 
	else
	{
		$cookie=++$_COOKIE['user'];
	}
	echo "Number of visiting the site".$cookie;
	?>
</body>
</html>
