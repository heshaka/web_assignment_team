<?php

$con=mysqli_connect("localhost","root",""); 
if($con===false)
{
 echo "Not connected to server";
}



echo"connected successfully";

if(!mysqli_select_db($con, 'hotelian'))
{
 echo 'Database invalid';

}
else{
	echo"<br>connected to hotelian<br>";
}

$number=$_REQUEST['NIC'];
$password=$_REQUEST['password'];
$query="INSERT INTO login (nic,password) VALUES ('$number','$password')";
if(mysqli_query($con,$query))
{
	echo"recorded data successfully";

}
else{
	echo"ERROR:could not able to execute $query".mysqli_error($con);
}
if(!($number===nic))
{
	echo"NIC number is invalid.<br>";
}
if(!($password===password))
{
	echo"password entered is invalid<br>";
}
mysqli_close($con);

?>

