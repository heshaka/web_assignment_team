
<?php

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$telnumber=$_REQUEST['telephone number'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$detail=$_REQUEST['Details'];
$con=mysqli_connect("localhost","root","","hotelian");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
$query="INSERT INTO hotelcontacts(Fname,Lname,Email,Number,City) VALUES ('$firstname','$lastname','$telnumber','$address','$city','$detail')";
if(mysqli_query($con,$query))
{
	echo"recorded data successfully";
}
else{
	echo"ERROR:could not able to execute $query".mysqli_error($con);
}
mysqli_close($con);
?>




