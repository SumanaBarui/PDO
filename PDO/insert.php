<?php

include("PDO.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];


$query="INSERT INTO `pdo`(`name`,`email`,`age`)VALUES (:name,:email,:age)";

$data=$conn->prepare($query);
$data->bindparam(':name',$name);
$data->bindparam(':email',$email);
$data->bindparam(':age',$age);

if($data->execute())
{
	header("location:display.php");
}
else
{
	echo "NOt Inserted!";
}




?>