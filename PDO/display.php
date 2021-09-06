<?php
include("PDO.php");
$sql="select * from `pdo`";

$data=$conn->query($sql);
;

echo "<table border=2>
<tr><th>Name</th><th>email</th><th>age</th><th >Action</th></tr>";

while($row=$data->fetch(PDO::FETCH_ASSOC))
{

	echo "<tr>";

	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['email']."</td>";
	echo"<td>".$row['age']."</td>";
	echo"<td><a href='edit.php?ep=$row[id]'>edit</a>&nbsp;
	<a href='delete.php?ep=$row[id]'>delete</a></td>";

	echo"</tr>";
}



echo "</table>";






?>