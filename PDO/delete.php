<?php
include("PDO.php");
$id=$_REQUEST['ep'];
$sql="DELETE FROM pdo WHERE id=$id";

$data=$conn->prepare($sql);
if($data->execute())
{
	header("location:display.php");
}
else
{
	echo "NOt deleted!";
}

?>
