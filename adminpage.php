
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />


</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
		
    
    <div id="tooplate_header">
        <div id="site_title"><h1 style='font-size:500%'>Blood Bank</h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                
                <li><a href="logout.php">Log Out</a></li>
                
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h4>Add Admin</h4>
        <form method="post" action="add_admin.php">
    
Name<br>
<input type="name" name="admin_name"><br>
Password<br>
<input type="password" name="admin_pass"><br>
<br>
<input type="submit"    name="sumbit" value="Add">
</form>

	</div> <!-- end of middle -->
<br>
    <div id="tooplate_main">
    
    	<div class="col_w960">
        	<div class="col_w450 float_l">
        		<div class="col_w200 float_l">
              <div id="contact_form">
        
					<h4>Add Banks</h4>
					
					<form method="post" action="add_bb.php">
    
Name<br>
<input type="name" name="bb_name"><br>
Incharge Name<br>
<input type="name" name="bb_inchargename"><br>
Number<br>
<input type="name" name="bb_contactno"><br>
Address<br>
<input type="name" name="bb_address"><br>
<br>

<input type="submit"    name="sumbit" value="Add">
</form><br>
<a href="admin_banks.php">
    <button class="btn2" width="20%" type="button">Show Banks</button>
</a>
<br>
<h4>Add Reserved Donation</h4>
					
					<form method="post" action="add_donation.php">
    
ID<br>
<input type="name" name="id"><br>
<br>
<input type="submit"    name="sumbit" value="Add">
</form>
				</div>
					
				</div>
			</div>

           
            <div class="col_w450 float_r">
				<div id="contact_form">
        
					<h4>Dash Board</h4>
					
					<?php

    include('session.php');
$conn = mysqli_connect('localhost', 'root', 'sXdG160000_62243'); //The Blank string is the password
mysqli_select_db($conn, 'bloodbank');


$query = "SELECT * FROM dash"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn, $query);

echo "<table border='2' align='center' bgcolor='white'>"; // start a table tag in the HTML
echo "<tr><th>Name</th><th>Type</th><th>BloodGroup</th><th>Quantity</th><th>Address</th></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['type'] . "</td><td>".  $row['bg']. "</td><td>" . $row['q'] . "</td><td>" . $row['address'] . "</td></tr>" ;//the index here is a field name
}

echo "</table>"; //Close the table in HTML

echo"</td></tr></table>";


?>
<br>
<a href="dash_delete.php">
<button class="btn2"> Delete Dash</button></a>

<br><br>

<h4>Update</h4>
<form method="post" action="update.php">
    
Code of the bank to update<br>
<input type="name" name="bb_id"><br>
<br>

<input type="submit" name="submit" value="Update">


				</div>
            </div>
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	
        
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
    	
		Copyright © CSE12
		
    </div>
</div>
</body>
</html>