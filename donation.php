
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reservation</title>
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
                <li><a href="bloodbanks.php">Banks</a></li>
                <li><a href="donation.php" class="current">Reserved Blood</a></li>
                
                <li><a href="logout.php">Log Out</a></li>
                
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    
        
        <div class="cleaner"></div>
    

	<div class="cleaner"></div>

<br><br><br><br><br><br>

</body>
</html>
<?php

echo "<body bgcolor= 'red'>";
$conn = mysqli_connect('localhost', 'root', ''); //The Blank string is the password
mysqli_select_db($conn, 'bloodbank');

$query = "SELECT * FROM donation,bb where bb.bb_id=donation.bb_id"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn, $query);

//echo "<body bgcolor='red'><h1  style='font-size:200%'' style='font-family:verdana' align='center'></h1></body>";

//echo "<table bgcolor='white' width='90%' height='100%' border='1' align='center'><tr><td>";

echo "<h1 style='font-size:200%'' style='font-family:verdana' align='center'>Reserved Blood Quantity</h1>";

echo "<table border='3' align='center' bgcolor='white'>"; // start a table tag in the HTML

echo "<tr><th>Blood Bank Name</th><th>A Positve</th><th>A Negative</th><th>B Positve</th><th>B Negative</th><th>O Positve</th><th>O Negative</th><th>AB Positve</th><th>AB Negative</th></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results


echo "<tr><td>" . $row['bb_name'] . "</td><td>" . $row['A+'] . "</td><td>".  $row['A-']. "</td><td>" . $row['B+'] . "</td><td>" . $row['B-'] . "</td><td>" . $row['O+'] . "</td><td>" . $row['O-'] . "</td><td>" . $row['AB+'] . "</td><td>" . $row['AB-'] . "</td></tr>" ;//the index here is a field name
}

echo "</table>"; //Close the table in HTML


echo "</body>";
?>