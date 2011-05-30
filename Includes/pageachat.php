
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
	<link rel="stylesheet" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="Common/jquery-ui/development-bundle/themes/base/jquery.ui.all.css" media="all" />
	<script type="text/javascript" src="Common/jquery.js"></script>
	<script type="text/javascript" src="Common/jquery-ui/js/jquery-ui-1.8.12.custom.min.js"></script>
	<script type="text/javascript" src="Common/ajax.js"></script>
	
	<style type="text/css">
	
	body{background:#EEE;}
	</style>
</head>
<body>
<div id="DOM">
	<div id="head1">
		
			<div id="session">
			<?php 	echo "<p id='loguser'>Logged as ".$_SESSION['user']."</p>";
					
			?>
			</div>
			
			<div id="heads">
			<?php 	
					echo "<a href='logout.php' id='logout'>LogOut</a>";
			?>
			</div>
	</div>
	
	<div id="middle">
		<div id="panier">
		</div>		
		<div id="caisse">
		
		</div>
		
		<div id="plat">
		
		<div id="pepsi" 	class="drag"   ></div>
		<div id="tarte" 	class="drag"   ></div>
		<div id="glace" 	class="drag"   ></div>
		<div id="pizza" 	class="drag"   ></div>
		<div id="hamburger" class="drag"   ></div>
		
		</div>
		 
					
		
	</div>
		
	
	<div id="footer">
		<div id="votrepanier">
			<div id="mypanier">
			
			</div>
			<div id="yes"> 
			
			</div>
			
			<div id="no"> 
			
			</div>
			

			<div id="go"> 
			
			</div>
			
			
		</div>
	</div>
</div>
</body>
</html>