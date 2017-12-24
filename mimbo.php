
<?php




$conn=mysqli_connect("localhost","root","");
if(!$conn){

	die('Could not connect'.mysqli_error());
}

if(isset($_POST['d_name'])&&$_POST['d_pincode']&&$_POST['d_age']&&$_POST['d_bg']&&$_POST['d_address']&&$_POST['d_lastdonation']){

$d_name=$_POST['d_name'];
$d_pincode=$_POST['d_pincode'];
$d_age=$_POST['d_age'];
$d_bg=$_POST['d_bg'];
$d_contact=$_POST['d_contact'];
$d_address=$_POST['d_address'];
$d_lastdonation=$_POST['d_lastdonation'];

$sql="insert into donor(donor_name,donor_pincode,donor_age,donor_bloodgroup,donor_contactno,donor_address,donor_lastdonation)values('$d_name','$d_pincode','$d_age','$d_bg','$d_contact','$d_address','$d_lastdonation')";

mysqli_select_db($conn, 'bloodbank');
mysqli_query($conn, $sql)or die('Could not connect'.mysqli_error()); 
echo 'data successfully entered';
}
mysqli_close($conn);
header('Location: index.php');


?>