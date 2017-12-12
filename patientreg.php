
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Patient Registration</title>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="benefits.html">Donation Benefits</a></li>
                <li><a href="registrationpage.html"class="current">Registration</a></li>
                <li><a href="login.php">Log In</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->

</body>
<br><br><br><br><br><br>
<body>
	<head style="background-color:lightgrey">  
		<h1 style="font-size:200%" style="font-family:verdana" style="text-align:center">Patient Registration</h1>
	</head>
<form method="post" action="patientsql.php">
	<br>
Patient Name<br>
<input type="name" name="p_name"><br><br>
Patient Pincode<br>
<input type="password" name="p_pincode"><br><br>
Age<br>
<input type="name" name="p_age"><br><br>
Blood Group<br>
<input type="name" name="p_bg"><br><br>
Disease<br>
<input type="name" name="p_disease"><br><br>
Hospital Name<br>
<input type="name" name="p_hospital"><br><br>
Doctor's Contact Number<br>
<input type="name" name="p_dcontact"><br><br>
Address<br>
<input type="name" name="p_address" ><br><br>
Contact Number<br>
<input type="name" name="p_contact"><br><br>



<input type="submit"	name="sumbit" value="Register">

</form>

</body>

</html>