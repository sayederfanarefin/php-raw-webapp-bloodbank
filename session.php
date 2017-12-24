<?php
session_start();
$current_filename = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['']))
{
	$referer = $_SERVER['HTTP_REFERER'];
}
function dlogin()
{
	if(isset($_SESSION['donor_id']) && !empty($_SESSION['donor_id']))
	{
		return true;
	}
	return false;
}
function plogin()
{
	if(isset($_SESSION['patient_id']) && !empty($_SESSION['patient_id']))
	{
		return true;
	}
	return false;
}
function adminlogin()
{
	if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']))
	{
		return true;
	}
	return false;
}

function GetUserField($field)
{
	$query = "SELECT '$field' FROM 'donor' WHERE 'donor_id' = '".$_SESSION['donor_id']."'";
	if($query_run = mysqli_query($query))
	{
		if($mysqli_result=mysqli_result($query_run, 0 , $field))
		{
			return mysqli_result;
		}
	}
}

?>