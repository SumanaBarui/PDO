<?php 
$servername="localhost";
$username="root";
$password="";

try{

	$conn=new PDO("mysql:host=$servername;dbname=crud",$username,$password);
}
catch(PDOException $e)
{
	echo "Connection Error".$e->getMessage();
}


?>