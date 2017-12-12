
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin LogIn</title>
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
              
                <li><a href="login.php">Log In</a></li>
                
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    

</body>
</html>
<?php

$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('bloodbank');


            


if(isset($_POST['admin_name'])&&($_POST['admin_pass']))
{
            $admin_name=$_POST['admin_name'];
            $admin_pass=$_POST['admin_pass'];

            if(!empty($admin_name) && !empty($admin_pass))
            {

                        $query="SELECT * FROM `admin`
                         WHERE `admin_name`='$admin_name' 
                         AND `admin_pass`='$admin_pass'";
                        if($query_run=mysql_query($query))
                        {
                                $query_num_rows=mysql_num_rows($query_run);

                                if($query_num_rows==0)
                                {
                                        echo 'Invalid username/password combination ';
                                }
                                else if($query_num_rows==1)
                                {
                                    $admin_id=mysql_result($query_run, 0, 'admin_id');
                                   $_SESSION['admin_id']=$admin_id;
                                    header('Location: adminpage.php');
                                }


                        }
            }
            else
                echo 'Please type a username and password.';
}

?>
<p>
Log in as Admin<br>
    
    </p>
<form action=""  method="POST">
    Username: <input type="text" name="admin_name"><br><br>
    Password:<input type="password" name="admin_pass"><br><br>
    <input type="submit" value="Log In">
</form> 
</p>

