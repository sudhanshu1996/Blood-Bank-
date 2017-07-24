<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="blood";
$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
if(isset($_POST['oname']) && isset($_POST['oid']) && isset($_POST['orgt']) && isset($_POST['oadd']) && isset($_POST['ocity']) && isset($_POST['opin']) && isset($_POST['ocno']) && isset($_POST['oem']) && isset($_POST['opwd']))
{
$oname= $_POST["oname"];
$old= $_POST["oid"];
$otype= $_POST["orgt"];
$address= $_POST["oadd"];
$city= $_POST["ocity"];
$pincode= $_POST["opin"];
$contact_no= $_POST["ocno"];
$email= $_POST["oem"];
$pass1=md5($_POST["opwd"]);

//$pass = md5($_POST["pwd"]);


echo "hi vikas ";
if(mysqli_query($link,"INSERT INTO org(oname,oid,otype,address,city,pincode,contact_no,email,pass1)	VALUES ('$oname','$old','$otype','$address','$city','$pincode','$contact_no','$email','$pass1')")){
    
	echo "New records created successfully";
    
	?>
    <html>
    <h2 align="center"><a href="tm.php"> HOME PAGE </a></h2>
    <h2 align="center"><a href="4.html"> SIGN IN  </a></h2>
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
else{
echo "Sorry,password ";
}
?>