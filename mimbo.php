
<?php




$conn=mysql_connect("http://13.65.206.139:3307","root","sXdG160000_62243");

if(!$conn){

	die('Could not connect'.mysql_error());
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

mysql_select_db('bloodbank');
mysql_query($sql,$conn)or die('Could not connect'.mysql_error()); 
echo 'data successfully entered';
}
mysql_close($conn);
header('Location: index.php');


?>