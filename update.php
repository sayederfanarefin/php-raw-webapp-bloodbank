<?php

$conn=mysql_connect("localhost","root","");

if(!$conn){

	die('Could not connect! '.mysql_error());
}

if(isset($_POST['bb_id']))
{

$bb_id=$_POST['bb_id'];


$sql="SELECT * FROM donation where bb_id='$bb_id'";


mysql_select_db('bloodbank');
mysql_query($sql,$conn)or die('Sorry! Could not connect! '.mysql_error()); 
$result=mysql_query($sql,$conn);
echo "<table border='3' align='center' bgcolor='white' >";
echo "<tr><th>A Positve</th><th>A Negative</th><th>B Positve</th><th>B Negative</th><th>O Positve</th><th>O Negative</th><th>AB Positve</th><th>AB Negative</th></tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results

echo "<form action=updatesql.php method=post>";
echo "<tr>";
echo "<td>" ."<input type=number name=ap value=" . $row['A+'] . " </td>";
echo "<td>" ."<input type=number name=an value=" .  $row['A-']. " </td>";
echo "<td>" ."<input type=number name=bp value=" . $row['B+'] . " </td>";
echo "<td>" ."<input type=number name=bn value=" . $row['B-'] . " </td>";
echo "<td>" ."<input type=number name=op value=" . $row['O+'] . " </td>";
echo "<td>" ."<input type=number name=on value=" . $row['O-'] . " </td>";
echo "<td>" ."<input type=number name=abp value=" . $row['AB+'] . " </td>";
echo "<td>" ."<input type=number name=abn value=" . $row['AB-'] . " </td>";
echo "<td>" ."<input type=hidden name=bb_id value=". $row['bb_id'] . " </td>";
echo "<td>" . "<input type=submit name=update value=Update" . " </td>";
echo "</tr>" ;
echo "</form>" ;//the index here is a field name
}
echo "</table>";
}


mysql_close($conn);


?>