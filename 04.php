<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="blood";

$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);

$fname= $_POST["fname"];
$lname =$_POST["lname"];
$Email =$_POST["em"];
$password = md5($_POST["pwd"]);

if(mysqli_query($link,"INSERT INTO doner(fname,lname,email,pass) VALUES ('$fname','$lname','$Email','$password')")){
	echo "New records created successfully";
}

+function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<html>
<div>
			<a href="mainpage.html">
				Home
			</a>
</html>