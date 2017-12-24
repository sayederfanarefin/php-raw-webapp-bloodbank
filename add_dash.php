
<?php




$conn=mysqli_connect("localhost","root","sXdG160000_62243");
if(!$conn){

	die('Could not connect'.mysqli_error());
}

if(isset($_POST['name'])&&$_POST['type']&&$_POST['bg']&&$_POST['q']&&$_POST['address']){

$name=$_POST['name'];
$type=$_POST['type'];
$bg=$_POST['bg'];
$q=$_POST['q'];
$address=$_POST['address'];

$sql="insert into dash(name,type,bg,q,address)values('$name','$type','$bg','$q','$address')";

mysqli_select_db($conn, 'bloodbank');
mysqli_query($conn, $sql)or die('Could not connect'.mysqli_error()); 
echo 'data successfully entered';
}
mysqli_close($conn);

?>
<html>
<body>
<p>
Back to <a href="abc.html">Home Page</a></p></body>
</html>