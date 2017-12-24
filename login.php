
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donor LogIn</title>
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
                
                <li><a href="registrationpage.html">Registration</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Donor Log In</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="login.php">Donor</a>
                    </li>
                    <li>
                      <a href="plogin.php">Patient</a>
                    </li>
                    <li>
                      <a href="admin_login.php">Admin</a>
                    </li>
                </li>
                
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    

</body>
</html>
<?php

$connection = mysqli_connect('localhost', 'root', ''); //The Blank string is the password
mysqli_select_db($connection, 'bloodbank');


            


if(isset($_POST['donor_name'])&&($_POST['donor_pincode']))
{
            $donor_name=$_POST['donor_name'];
            $donor_pincode=$_POST['donor_pincode'];

            if(!empty($donor_name) && !empty($donor_pincode))
            {

                        $query="SELECT * FROM `donor`
                         WHERE `donor_name`='$donor_name' 
                         AND `donor_pincode`='$donor_pincode'";
                        if($query_run=mysqli_query($connection, $query))
                        {
                                $query_num_rows=mysqli_num_rows($query_run);

                                if($query_num_rows==0)
                                {
                                        echo 'Invalid username/password combination ';
                                }
                                else if($query_num_rows==1)
                                {

                                  $row=mysqli_fetch_array($result);
                                  $donor_id = $row['donor_id'];
                                  //  $donor_id=mysqli_result($query_run, 0, 'donor_id');
                                   $_SESSION['donor_id']=$donor_id;
                                    header('Location: abc.html');
                                }


                        }
            }
            else
                echo 'Please type a username and password.';
}

?>
<form action=""  method="POST">
    Username: <input type="text" name="donor_name"><br><br>
    Password:<input type="password" name="donor_pincode"><br><br>
    <input type="submit" value="Log In">
</form> 
</p>
<p>
Not registered yet!!<br>
    <form action="registrationpage.html"  method="POST">
    <input type="submit" value="Register Now">
    </p>
    <br>
    
