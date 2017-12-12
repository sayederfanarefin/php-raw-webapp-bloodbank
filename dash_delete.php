<?php
$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('bloodbank');

mysql_query('TRUNCATE TABLE dash');
header('Location: adminpage.php');

?>