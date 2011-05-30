<?php
session_start();
if(isset($_SESSION['user'])){
session_destroy();
}
else
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
	<link rel="stylesheet" href="style/style.css" />
	<script type="text/javascript" src="Common/jquery.js"></script>
	<script type="text/javascript" src="Common/ajax.js"></script>
	
</head>
<body>
<div id="DOM">
	<div id="head">
		<div id="log">
		<form id="formulaire" action="login.php" method="POST">
			<table class="style">
				
					<tr>
						<td class="log">Username</td>
						<td><input type="text" name="user"  class="champ"/></td>
						<td class="log">Password</td>
						<td><input type="password" name="pass"  class="champ"/></td>
						<td><input type="submit" value="Log In" class="style"/></td>
					</tr>
				
			</table>
		</form>
		
		</div >
		<div id="space">
			
		</div>
		<div id="space1">
			
		</div>
	</div>
	
	<div id="middle">
		<div id="menu"> 
		<form action="signup.php" method="POST" id="formulaire">
		
				<table id="registration" class="champ">
				<tr>
					<td class="log">Username</td>
					<td><input type="text" name="user" id="checkuser" class="champ"/></td>
					<td id="check1"></td>
				</tr>
				<tr>
					<td class="log">Password</td>
					<td><input type="password" name="pass" id="password" class="champ"/></td>
					<td id="check2"></td>
				</tr>
				<tr>
					<td class="log">Email</td>
					<td><input type="text" name="email" id="checkmail" class="champ"/></td>
					<td id="check3"></td>
					
				</tr>
				<tr>
					<td><input type="submit" value="Sign Up" class="style"></td>
				</tr>
				</table>
		
				</form>
		<div id="signin"></div>
		</div>
		
		<div id="page"> 
			
			
			<div id="commanderonligne">
				
			</div>			
		</div>
	</div>
		
	
	<div id="footer">
	
	
	</div>
</div>
</body>
</html>