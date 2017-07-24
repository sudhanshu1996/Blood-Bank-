<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="blood";


// Create connection
$conn = new mysqli($servername, $user, $mysqlPassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST["submit"])){
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$Email= $_POST["em"];
$password = md5($_POST["pwd"]);

$sql = "INSERT INTO doner(fname,lname,email,pass) VALUES ('$fname','$lname','$Email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
/*$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
if(mysqli_query($link,"INSERT INTO doner(fname,lname,email,pass) VALUES ('$fname','$lname','$Email','$password')")){
	echo "New records created successfully";
}
+function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;

   }
*/
?>
