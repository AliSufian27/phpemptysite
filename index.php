<?php
	$servername = "tcp:stms.database.windows.net";
	$username = "AliSufian";
	$password = "Abc@12345";
	$dbname = "STMS";

$conn = mysqli_connect($servername, $username, $password,$dbname);
	
//$sql = "INSERT INTO info (ID,Value) VALUES ('".$_GET["ID"]."','".$_GET["Value"]."')";
$sql = "INSERT INTO info (Value) VALUES (10)";
if(mysqli_query($conn,$sql))
{
	echo "Done YoY :)";
}
else
{
	echo "error is ".mysqli_error($con );
}

?>
