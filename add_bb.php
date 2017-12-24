
<?php




$conn=mysqli_connect("localhost","root","sXdG160000_62243");
if(!$conn){

	die('Could not connect'.mysqli_error());
}

if(isset($_POST['bb_name'])&&$_POST['bb_inchargename']&&$_POST['bb_contactno']&&$_POST['bb_address']){

$bb_name=$_POST['bb_name'];
$bb_inchargename=$_POST['bb_inchargename'];
$bb_contactno=$_POST['bb_contactno'];
$bb_address=$_POST['bb_address'];


$sql="insert into bb(bb_name,bb_inchargename,bb_contactno,bb_address)
values('$bb_name','$bb_inchargename','$bb_contactno','$bb_address')";



mysqli_select_db($conn, 'bloodbank');

mysqli_query($conn, $sql)or die('Could not connect'.mysqli_error());

header('Location: adminpage.php');
//echo 'data successfully entered';
}

mysqli_close($conn);



?>