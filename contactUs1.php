
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

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$telnumber=$_REQUEST['telephonenumber'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];


$query="INSERT INTO hotelcontacts(Fname,Lname,email,number,city) VALUES ('$firstname','$lastname','$telnumber','$address','$city')";
if(mysqli_query($con,$query))
{
	echo"recorded data successfully";

}
else{
	echo"ERROR:could not able to execute $query".mysqli_error($con);
}
mysqli_close($con);

?>
<html>
<head>
	<body>
	<input type="button" value="home" href="home.html">
	</body>
</head>
</html>






