
<?php




$conn=mysql_connect("localhost","root","");
if(!$conn){

	die('Could not connect'.mysql_error());
}

if(isset($_POST['bb_name'])&&$_POST['bb_inchargename']&&$_POST['bb_contactno']&&$_POST['bb_address']){

$bb_name=$_POST['bb_name'];
$bb_inchargename=$_POST['bb_inchargename'];
$bb_contactno=$_POST['bb_contactno'];
$bb_address=$_POST['bb_address'];


$sql="insert into bb(bb_name,bb_inchargename,bb_contactno,bb_address)
values('$bb_name','$bb_inchargename','$bb_contactno','$bb_address')";



mysql_select_db('bloodbank');

mysql_query($sql,$conn)or die('Could not connect'.mysql_error());

header('Location: adminpage.php');
//echo 'data successfully entered';
}

mysql_close($conn);



?>