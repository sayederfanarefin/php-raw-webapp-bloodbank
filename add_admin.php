
<?php



$conn=mysql_connect("http://13.65.206.139:3307","root","sXdG160000_62243");
if(!$conn){

	die('Could not connect'.mysql_error());
}

if(isset($_POST['admin_name'])&&$_POST['admin_pass']){

$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];


$sql="insert into admin(admin_name,admin_pass)values('$admin_name','$admin_pass')";

mysql_select_db('bloodbank');
mysql_query($sql,$conn)or die('Could not connect'.mysql_error()); 
echo 'data successfully entered';
}
mysql_close($conn);
header('Location: adminpage.php');


?>