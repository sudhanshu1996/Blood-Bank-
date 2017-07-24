<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .container {
  background-color:GREEN;
  padding: 80px 120px;
  }
  body{
	background-image:url(34.jpg);
	background-color:black;
	background-size:1370px 670px;
	background-repeat:no-repeat;
    background-position:0px 0px;  
	font-family:'AR CENA';
  }
  </style>
</head>
<body>

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(isset($_POST['bg'])&&isset($_POST['city'])){
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $bg= $_POST["bg"];
   $city= $_POST["city"];
   $sql = "SELECT fname,lname,email FROM doner1 where city='$city' AND blg='$bg'";
   mysql_select_db('blood');
   $retval = mysql_query( $sql, $conn );
   //$count=mysqli_num_rows($retval);
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
  $co;
  echo "<div align='center' style='position:absolute;top:10px;left:580px;' ><font size='5' color='white'>Donars In $city</font></div>";
  ?>
   <form role="form" action="tm.php#section2" method="post" style="position:absolute;left:1250px;top:10px;">
  <button name="button" class="btn btn-primary" value="OK"  color="red" type="submit">Home</button>
  </form>
  </br>
  </br>
  </br>
  <?php
  $co=0;
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo 
		  "<div class='thumbnail' style='background-color:#cce6ff;left:50px;width:900px;margin-left:220px;'>".
		  "<div class='row'>".
          "<div  class='col-sm-4'>".
	     "Frist Name :{$row['fname']}  </br></br> ".
         "Last Name  : {$row['lname']} </br></br> ".
         "E-Mail Id  : {$row['email']} </br></br> ".
         "</div>".
		 "</div>".
		 "</div>";
	   $co=$co+1;	 
	 
	
	}
	//echo $co;
	$c=0;
	//echo $c;
	if($co===$c)
	echo "<h2 align='center'> Sorry no Doner Fount , try with another nearby city</h2>";
    
    
	  }
	  else
		  echo" Please insert correct data";
	
	
      mysql_close($conn);
?>
</body>
</html>
