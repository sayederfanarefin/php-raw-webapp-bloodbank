
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Banks</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	
    <div id="tooplate_header">
        <div id="site_title"><h1 style='font-size:500%'>Blood Bank</h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="abc.html">Home</a></li>
                <li><a href="bloodbanks.php" class="current">Banks</a></li>
                <li><a href="donation.php" >Reserved Blood</a></li>
                
                <li><a href="logout.php">Log Out</a></li>

            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
   
<br><br><br><br><br><br>
</body>
</html>
<?php

    include('session.php');
$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('bloodbank');


$query = "SELECT * FROM bb"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
//echo "<body bgcolor='red'><h1  style='font-size:200%'' style='font-family:verdana' align='center'></h1></body>";

//echo "<table bgcolor='white' width='90%' height='100%' border='1' align='center'><tr><td>";
echo "<h1 style='font-size:200%'' style='font-family:verdana' align='center'>Blood Banks</h1>";
echo "<table border='3' align='center' bgcolor='white'>"; // start a table tag in the HTML
echo "<tr><th>Bank Name</th><th>Incharge Name</th><th>Contact Number</th><th>Address</th></tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['bb_name'] . "</td><td>" . $row['bb_inchargename'] . "</td><td>".  $row['bb_contactno']. "</td><td>" . $row['bb_address'] . "</td></tr>" ;//the index here is a field name
}

echo "</table>"; //Close the table in HTML

echo"</td></tr></table>";


?>
