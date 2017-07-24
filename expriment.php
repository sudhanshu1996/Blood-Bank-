<!DOCTYPE html>
<html>
<head>
<style>
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('31.jpg');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
</head>
<body>
<div id="section4" class="container-fluid" style="height:670px; background-image:url(03.jpg);background-color:black; background-size:2000px 670px;background-repeat:no-repeat;
background-position:0px 0px;font-family:'AR CENA'">
<h2 align="center"><font color='#ff5c33'  size="10" ><strong>**Search Organisation**<strong></font></h2>

<form role="form"  class="form-signin" action="expriment.php" method="post">
  <input type="text" style="left=100" name="search" placeholder="Search..">
</br></br>
  </form>

</body>
</html>


<?php
    $servername = "localhost";
    $user = "root";
    $mysqlPassword = "";
    $dbname="blood";
    $link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  
  if(isset($_POST['search'])){
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $se= $_POST["search"];
   $sql1= "SELECT * FROM org where city='$se'";
   mysql_select_db('blood');
   $retval1 = mysql_query( $sql1, $conn );
   $result=mysqli_query($link,"SELECT * FROM org where city='$se'");
	$count1=mysqli_num_rows($result);
   $flag1=0;
  // echo $count1;
   if($count1!=0){
	   $flag1=1;
	      $servername = "localhost";
    $user = "root";
    $mysqlPassword = "";
    $dbname="blood";
    $link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
	

   $result=mysqli_query($link,$sql1);
   $count=mysqli_num_rows($result);
   $a=array("#ffe066","#bb99ff");
   $flag=0;
  // echo $count;
   while($row = mysqli_fetch_assoc($result))
   {   
	    echo "<div class='thumbnail' style='background-color:$a[$flag];position:relative;left:100px;width:700px'>".
	        "<div class='row'>".
			"<div class='col-sm-4'>".
			"Organization ID:{$row['oid']} <br>".
	        "Organization Name:{$row['oname']} <br>".
            "type:{$row['otype']} <br>".
            "Address:{$row['address']} <br>".
            "Pincode:{$row['pincode']} <br>".
            "Email:{$row['email']} <br>".
            "contact no:{$row['contact_no']} <br>".
			"</div>".
			"</div>".
		    "</div>";
		if($flag==1)
			 $flag=0;
		 else $flag=1;
	    
         
   }
   }
  }
?>  
	
<div>	
