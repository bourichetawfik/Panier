<?php
session_start();
$user = $_POST['user'];
$password =sha1( $_POST['pass']);

$con = mysql_connect("localhost","root","");


$database = "webapp";
$db =  mysql_select_db($database,$con);



$query = sprintf("SELECT * FROM USERS WHERE USERNAME = '%s' AND PASSWORD = '%s'",
																		mysql_escape_string($user),
																		mysql_escape_string($password) );
$result = mysql_query($query,$con);



$check = mysql_num_rows($result);

	if( $check > 0)
		{
			header("location:Achat.php");
			$_SESSION['user'] =$user;
		}
	else
		{
			echo "login failed !";
			header("location:index.php");
		}
 


?>