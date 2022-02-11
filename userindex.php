<?php
   session_start();
   if($_SESSION['user_login_status']!="loged in" and ! isset($_SESSION['email']) )
    header("Location:../login.php");
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
  $_SESSION['user_login_status']="loged out";
  unset($_SESSION['email']);
   header("Location:../login.php");    
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>Medicine</title>
<link rel="stylesheet"  href="../css/style.css"> 
</head>
<body>
	
		<nav>
			<div class="navi">
			<ul class="manu">
			<li><a href="#">Home</a></li>			
			<li><a href="">Services</a>
				

				</li>
			<li><a href="#">About</a>
				
			
			<li><a href="show_data.php">Product</a>		
				
				</li>
				<li><a href="?sign=out">Logout</a></li>
			</ul>
			</div>
			
		</nav>
		<div class="title">
			<h1>User</h1>
			</div>
			
		
</body>
</html>

