<?php
session_start();
if (isset($_SESSION['username']))
{

	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$forename = $_SESSION['fname'];
	$surname  = $_SESSION['lname'];
	$bday     = $_SESSION['birthday'];
	$pword    = $_SESSION['password'];
	$profpic  =  $_SESSION['profilepic'];
	$nationality = $_SESSION['nationality_name'];
	$hometown = $_SESSION['hometown'];
	$currentcountry = $_SESSION['current_country_name'];
	@$currentcity = $_SESSION['current_city'];

	//echo "Profile Picture:$profpic";

	//	destroy_session_and_data();


}
?>