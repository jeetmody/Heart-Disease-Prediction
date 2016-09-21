<?php /**********MYSQL Settings****************/ 
$host="localhost"; 
$databasename="heart"; 
$user="root"; 
$pass=""; 
/**********MYSQL Settings****************/ 
$conn=mysql_connect($host,$user,$pass); 
mysql_select_db($databasename, $conn);

?>