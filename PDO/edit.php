<?php
include("PDO.php");
$id=$_REQUEST['ep'];
$sql="SELECT * FROM pdo WHERE id=:id";

$data=$conn->prepare($sql);
$data->execute(array(":id"=>$id));


while($result=$data->fetch(PDO::FETCH_ASSOC))
{
	$name=$result['name'];
	$email=$result['email'];
	$age=$result['age'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="editdisplay.php">
	<input type="hidden" name="hid" value="<?=$id;?>">
	Name<input type="text" name="name"value="<?=$name;?>"><br>

	Email<input type="text" name="email"value="<?=$email;?>"><br>
	Age<input type="text" name="age"value="<?=$age;?>"><br>
	<input type="submit" name="submit" value="update">
</form>
</body>
</html>