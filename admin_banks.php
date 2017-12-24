
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
                <li><a href="adminpage.php">Admin Page</a></li>
                <li><a href="logout.php">Log Out</a></li>

            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
   

</body>
</html>
<?php

    include('session.php');
$connection = mysqli_connect('localhost', 'root', 'sXdG160000_62243'); //The Blank string is the password
mysqli_select_db($connection, 'bloodbank');


$query = "SELECT * FROM bb"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);
//echo "<body bgcolor='red'><h1  style='font-size:200%'' style='font-family:verdana' align='center'></h1></body>";

//echo "<table bgcolor='white' width='90%' height='100%' border='1' align='center'><tr><td>";
echo "<h1 style='font-size:200%'' style='font-family:verdana' align='center'>Blood Banks</h1>";
echo "<table border='3' align='center' bgcolor='white'>"; // start a table tag in the HTML
echo "<tr><th>Bank Name</th><th>Code</th></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['bb_name'] . "</td><td>" . $row['bb_id'] . "</td></tr>" ;
}

echo "</table>"; //Close the table in HTML

echo"</td></tr></table>";


?>
