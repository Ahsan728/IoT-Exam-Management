<?php
   session_start();
   if($_SESSION['admin_login_status']!="loged in" and ! isset($_SESSION['email']) )
    header("Location:../login.php");
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
  $_SESSION['admin_login_status']="loged out";
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
			<li><a href="change-password.php">change password</a>
				

				</li>
			<li><a href="product.php">Product</a>
				
				</li>
				</li>
			<li><a href="show_data.php">Show Product</a>
				
				</li>
			<li><a href="?sign=out">Logout</a></li>	   
				
				</li>
				
				
				</li>
			</ul>
			</div>
			
		</nav>
		<div class="title">
			<h1>Admin</h1>
			</div>
			
		
</body>
</html>

