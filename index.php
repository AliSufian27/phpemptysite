<?php
	$servername = "tcp:stms.database.windows.net";
	$username = "Ali";
	$password = "Abc@12345";
	$dbname = "STMS";

$conn = mysqli_connect($servername, $username, $password,$dbname);
	
$sql = "INSERT INTO info (Value) VALUES (12)";
if(mysqli_query($conn,$sql))
{
	echo "Done YoY :)";
}
else
{
	echo "error is ".mysqli_error($con );
}

?>
