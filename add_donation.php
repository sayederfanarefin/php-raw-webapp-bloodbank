<?php

$conn=mysqli_connect("localhost","root","sXdG160000_62243");

if(!$conn){

	die('Could not connect! '.mysqli_error());
}

if(isset($_POST['id'])){

$id=$_POST['id'];

$sql="insert into donation(bb_id)
	values('$id')";

mysqli_select_db($conn, 'bloodbank');
mysqli_query($conn, $sql)or die('Sorry! Could not connect Ya! '.mysqli_error()); 
//echo 'data successfully entered';
header('Location: adminpage.php');
}
mysqli_close($conn);


?>