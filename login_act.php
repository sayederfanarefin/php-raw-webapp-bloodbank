<?php

$connection =mysql_connect("http://13.65.206.139:3307","root","sXdG160000_62243"); //The Blank string is the password
mysql_select_db('bloodbank');


            


if(isset($_POST['donor_name'])&&($_POST['donor_pincode']))
{
            $donor_name=$_POST['donor_name'];
            $donor_pincode=$_POST['donor_pincode'];

            if(!empty($donor_name) && !empty($donor_pincode))
            {

                        $query="SELECT * FROM `donor`
                         WHERE `donor_name`='$donor_name' 
                         AND `donor_pincode`='$donor_pincode'";
                        if($query_run=mysql_query($query))
                        {
                                $query_num_rows=mysql_num_rows($query_run);

                                if($query_num_rows==0)
                                {
                                        echo 'Invalid username/password combination ';
                                }
                                else if($query_num_rows==1)
                                {
                                    $donor_id=mysql_result($query_run, 0, 'donor_id');
                                  // $_SESSION['donor_id']=$donor_id;
                                    header('Location: abc.html');
                                }


                        }
            }
            else
                echo 'Please type a username and password.';
}

?>