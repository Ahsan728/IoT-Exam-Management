<?php
 
$dbhost= 'localhost';
$username= 'root';
$password= '';
$db = 'database1';
 
mysql_connect("$dbhost", "$username", "$password"); 
//

mysql_select_db($db);


	   echo"data inserted successfully"
?>
 