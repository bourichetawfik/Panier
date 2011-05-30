<?php
session_start();

$mailcheck = $_POST['email'];


	function check_mail($add)
		{
			if(preg_match('/\w+@\w+\.\w+$/', $add))
				
				echo true;	
				 
			else
			
				echo false;
		}

check_mail($mailcheck);		


?>