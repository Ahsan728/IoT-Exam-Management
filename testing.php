<?php


$user="root";
$password="";
$db='database1';
$conn=new mysqli("localhost", $user, $password, $db) or die(" You are not connected");
echo "You are connected" ;


?>