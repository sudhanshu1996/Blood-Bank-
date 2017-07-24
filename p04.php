<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="blood";
$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
if(isset($_POST['fname']) && isset($_POST['lname'])&& isset($_POST['city']) && isset($_POST['em']) && isset($_POST['pwd']))
{
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$sel= $_POST["sel"];
$Email= $_POST["em"];


$password = md5($_POST["pwd"]);
$city= $_POST["city"];


if(mysqli_query($link,"INSERT INTO doner1(fname,lname,blg,city,email,pass) VALUES ('$fname','$lname','$sel','$city','$Email', '$password')")){
        $sql51="SELECT * FROM doner1 WHERE email=$Email";
		$result51=mysqli_query($link,"SELECT * FROM doner1 WHERE email='$Email'");
        $row51=mysqli_fetch_assoc($result51);
		echo
            "<div align='center' > ".
			"</br></br></br></br></br></br></br></br><h2 style='color:#e6ffff'>Your User ID:{$row51['did']} <br>".
			"First Name:{$row51['fname']} <br>".
            "Last name:{$row51['lname']} <br><h2>".
            "</div>"
			
		?>
		
    
    <html>
	<style>
	
	</style>
	<body style="background-image:url(34.jpg);image-repeat:no-repeat;background-position:0px 0px;background-size:1300px 620px;">
	<h2 align="center" style="color:#e6ffff;position:absolute;left:25%;top:40%;">||*||  "Thank you for being the part of such great noble cause"  ||*||</h2>
    <h2 align="center" style="color:#ffffcc;position:absolute;left:43%;top:50%;"><a style="color:#ffffcc" href="tm.php"> HOME PAGE </a></h2>
   	</body>
	</html>
     <?php


  }

else
{
  echo "Sorry,password do not match ";
  ?>
  <html>
 <a href="5.html" > <br>Please try again</a> ;  
 </html>
<?php
 }
}

?>