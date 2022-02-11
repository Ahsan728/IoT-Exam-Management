<?php
 
$user = 'root';
$pass = '';
$db = 'database1';
 
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
 
echo"Great work!!!";

 
?>
 