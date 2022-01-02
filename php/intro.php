<?php
//dsddd
/**fdfd
 **/
//single line comment 
/**
 Multiple line comment 
**/
// Array in PHP 
$name=array("Innocent","Charles","Juma");
echo $name[0];
echo "<br>";

$grades=array("A");
echo $grades[0]."<br>";
$gender="MALE";

function here()
{   
	global $gender;
	echo $gender;
}
here();

echo "<br>";
if($gender == "male")
{
	echo "It is Male";
}
else if($gender == "MALE")
{
	echo "It is NOT a Male";
}

else
{
	echo "I dont know the truth!!";
}

switch ($gender)
{
case "male":
{
	echo "male";
	break;
}
case "MALE":
{
	echo "MALE";
	break;
}
default :
{
	echo "Hdd";

}
}

$y=0;
while($y<=10)
{
	echo "Hello world"."<br>";
	$y++;
	
}

?>

