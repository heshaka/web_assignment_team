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
$name=$_REQUEST['Fname'];
$address=$_REQUEST['mail'];
$telephone=$_REQUEST['number'];
$member=$_REQUEST['member'];
$date=$_REQUEST['date'];
$size=$_REQUEST['size'];
$query="INSERT INTO booking (Fname,address,number,member,date,nation) VALUES('$name','$address','$telephone','$member','$date','$size')";
if(mysqli_query($con,$query))
{
	echo"recorded data successfully";

}
else{
	echo"ERROR:could not able to execute $query".mysqli_error($con);
}
mysqli_close($con);

?>