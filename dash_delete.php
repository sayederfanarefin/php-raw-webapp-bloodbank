<?php
$connection = mysqli_connect('localhost', 'root', 'sXdG160000_62243'); //The Blank string is the password
mysqli_select_db($conn, 'bloodbank');

mysqli_query('TRUNCATE TABLE dash');
header('Location: adminpage.php');

?>