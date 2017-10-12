<?php
	$servername = "tcp:stms.database.windows.net";
	$username = "Ali";
	$password = "Abc@12345";
	$dbname = "STMS";

$conn = mysqli_connect($servername, $username, $password,$dbname);
	
$sql = "INSERT INTO info (ID,Value) VALUES ('".$_GET["ID"]."','".$_GET["Value"]."')";
if(mysqli_query($conn,$sql))
{
	echo "Done YoY :)";
}
else
{
	echo "error is ".mysqli_error($con );
}

?>
