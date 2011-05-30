<?php
session_start();
$verifier = $_POST['verif'];

		
$con = mysql_connect("localhost","root","");
$database = "webapp";
$db =  mysql_select_db($database,$con);



$query = sprintf("select * from  users where username ='%s' ",$verifier);
$result = mysql_query($query,$con);

$retour = mysql_num_rows($result);

echo $retour;



?>