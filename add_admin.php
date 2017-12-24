
<?php




$conn=mysqli_connect("localhost","root","sXdG160000_62243");
if(!$conn){

	die('Could not connect'.mysqli_error());
}

if(isset($_POST['admin_name'])&&$_POST['admin_pass']){

$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];


$sql="insert into admin(admin_name,admin_pass)values('$admin_name','$admin_pass')";

mysqli_select_db($conn, 'bloodbank');
mysqli_query($conn, $sql)or die('Could not connect'.mysqli_error()); 
echo 'data successfully entered';
}
mysqli_close($conn);
header('Location: adminpage.php');


?>