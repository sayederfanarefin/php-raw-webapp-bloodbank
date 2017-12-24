<?php

$conn=mysqli_connect("localhost","root","sXdG160000_62243");

if(!$conn){

	die('Could not connect! '.mysqli_error());
}

if(isset($_POST['p_name'])&&$_POST['p_pincode']&&$_POST['p_age']&&$_POST['p_bg']&&$_POST['p_disease']&&$_POST['p_hospital']&&$_POST['p_dcontact']&&$_POST['p_address']&&$_POST['p_contact']){

$p_name=$_POST['p_name'];
$p_pincode=$_POST['p_pincode'];
$p_age=$_POST['p_age'];
$p_bg=$_POST['p_bg'];
$p_disease=$_POST['p_disease'];
$p_hospital=$_POST['p_hospital'];
$p_dcontact=$_POST['p_dcontact'];
$p_contact=$_POST['p_contact'];
$p_address=$_POST['p_address'];


$sql="insert into patient(p_name,p_pincode,p_age,p_disease,p_hospital,p_doctor_contactno,p_bloodgroup,p_contactno,p_address)values('$p_name','$p_pincode','$p_age','$p_disease','$p_hospital','$p_dcontact','$p_bg','$p_contact','$p_address')";

mysqli_select_db($conn, 'bloodbank');
mysqli_query($conn, $sql)or die('Sorry! Could not connect! '.mysqli_error()); 
echo 'data successfully entered';
}
mysqli_close($conn);
header('Location: abc.html');

?>