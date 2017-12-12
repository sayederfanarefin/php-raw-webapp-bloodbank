
<?php




$conn=mysql_connect("localhost","root","");
if(!$conn){

	die('Could not connect'.mysql_error());
}

if(isset($_POST['name'])&&$_POST['type']&&$_POST['bg']&&$_POST['q']&&$_POST['address']){

$name=$_POST['name'];
$type=$_POST['type'];
$bg=$_POST['bg'];
$q=$_POST['q'];
$address=$_POST['address'];

$sql="insert into dash(name,type,bg,q,address)values('$name','$type','$bg','$q','$address')";

mysql_select_db('bloodbank');
mysql_query($sql,$conn)or die('Could not connect'.mysql_error()); 
echo 'data successfully entered';
}
mysql_close($conn);

?>
<html>
<body>
<p>
Back to <a href="abc.html">Home Page</a></p></body>
</html>