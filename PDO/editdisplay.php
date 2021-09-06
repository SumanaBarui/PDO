<?php

include("PDO.php");
$id=$_REQUEST['hid'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];


$query="UPDATE `pdo` SET `name`=:name,`email`=:email,`age`=:age WHERE `id`=$id ";

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
	echo "NOt updated!";
}




?>