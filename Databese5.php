<?php
include 'db.php';
$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($result))
{
	echo $row['author']." ".$row['message']."<br>";
	
}



?>