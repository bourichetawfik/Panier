<?php
session_start();
$passcheck = $_POST['pass'];

function longueur_pass($pass)
	{
		if(strlen($pass) >= 8 )
			{
			echo true;
			}
		else
			{
			echo false;
			}
	}

longueur_pass($passcheck);

?>