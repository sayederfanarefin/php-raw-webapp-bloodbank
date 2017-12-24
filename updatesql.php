
<?php




$conn=mysqli_connect("localhost","root","");
if(!$conn){

	die('Could not connect'.mysqli_error());
}

if(isset($_POST['update'])){
$ap=$_POST['ap'];
$an=$_POST['an'];
$bp=$_POST['bp'];
$bn=$_POST['bn'];
$op=$_POST['op'];
$on=$_POST['on'];
$abp=$_POST['abp'];
$abn=$_POST['abn'];
$bb_id=$_POST['bb_id'];

$sql="UPDATE `donation` SET `A+`=$ap,`A-`=$an,`B+`=$bp,`B-`=$bn,`O+`=$op,`O-`=$on,`AB+`=$abp,`AB-`=$abn WHERE bb_id='$bb_id'";

mysqli_select_db($conn, 'bloodbank');
mysqli_query($conn, $sql)or die('Could not connect'.mysqli_error()); 
echo 'data successfully updated';
}
mysqli_close($conn);



?>
<html>
<body>
<p>
Back to  <a href="adminpage.php">Admin Page</a></p></body>
</html>