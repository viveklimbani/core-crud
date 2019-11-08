
<?php
include ('config.php'); 

$id = $_REQUEST["id"];

$query = "delete from students where id = '$id';";
$result = mysqli_query($conn, $query);
if($result)
{
	header('Location:table.php');
}


?>