<?php 
  //Include this file on other php files for now. Use namespaces if possible. Use PDO later.
  
  //Don't use password here directly. Use .env. https://github.com/vlucas/phpdotenv
  $conn = mysqli_connect("localhost","root","sXdG160000_62243"); 
  
  if(!$conn){
	  die('Could not connect'.mysqli_error());
  }
?>
