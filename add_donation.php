<?php

$conn=mysql_connect("localhost","root","");

if(!$conn){

	die('Could not connect! '.mysql_error());
}

if(isset($_POST['id'])){

$id=$_POST['id'];

$sql="insert into donation(bb_id)
	values('$id')";

mysql_select_db('bloodbank');
mysql_query($sql,$conn)or die('Sorry! Could not connect Ya! '.mysql_error()); 
//echo 'data successfully entered';
header('Location: adminpage.php');
}
mysql_close($conn);


?>