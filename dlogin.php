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

if(isset($_POST['id'])&&isset($_POST['pwd']))
{	
$orgid = mysqli_real_escape_string($link, $_POST["id"]);
$password = md5($_POST["pwd"]);
//echo "ommmm";
if(!empty($orgid)&&!empty($password))
{    
 $sql11= "SELECT * FROM doner1 where did='$orgid' AND pass='$password'";
   mysql_select_db('blood');
   $retval11 = mysql_query( $sql11,$conn );
   $result11=mysqli_query($link,"SELECT * FROM doner1 where did='$orgid' AND pass='$password'");
   $count11=mysqli_num_rows($result11);
   
   // echo $count1;
   if($count11==1){
	   $flag1=1;
	    $sql50="SELECT * FROM event2";
   	//mysql_select_db('blood');
	$result50=mysqli_query($link,"SELECT * FROM event2");
	 /*if(! $retval ) {
      die('Could not get data: ' . mysql_error());
       }
   */
   ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
.d{
background-color:#ffffcc;
background-position:100px 0px;
background-size:1100px 600px;}
span.tab-space {padding-left:5em;}
h3{
	background-color:yellow;
	position:absolute;
	left:500px;
	top:90px;
	
}
</style>
<div  style="height:670px; background-image:35.jpg;background-color:#ffffcc; background-size:1370px 570px;background-repeat:no-repeat;background-position:0px 0px">
<div class="d">   
   <?php
   //$count50=mysqli_num_rows($result50);
   while($row11= mysqli_fetch_assoc($result11))
   {echo "<br><h2 align='center' style='background-color:green;position:absolute;left:100px;top:40px;width:1150px;'><font color='white'> Welcome  '{$row11['fname']} {$row11['lname']}'</font></h2>";
   }
    echo "<h3 align='center'><font color='red'>||Blood Donation Campaign ||</font></h3>";
   $a=array("panel panel-primary","panel panel-success","panel panel-info","panel panel-warning","panel panel-danger");
   $flag=0;
  // echo $count;
  ?>
  </br></br></br></br></br></br></br>
  <marquee behavior="scroll" direction="up" style="height:450px;" scrollamount="4">
  <?php
   while($row50 = mysqli_fetch_assoc($result50)){
       $abc=$row50['oid'];
        $sql51="SELECT * FROM org WHERE oid='$abc'";
		$result51=mysqli_query($link,$sql51);
        $row51=mysqli_fetch_assoc($result51);?>
		<div class="container">
		<div class="panel-group">
		
		<?php
	    echo "<div class='$a[$flag]'><div class='panel-heading'>name of camp:{$row50['ename']}</div> <br>".
			"<div class='panel-body'>Arrange BY:{$row51['oname']}<br>".
            "address:{$row50['addr']} <br>".
			"city:{$row50['city']} <br>".
            "date:{$row50['date']} <br>".
            "time:{$row50['time']} <br>".
            "Email:{$row50['email']} <br>".
            "contact no:{$row50['contact']} <br>".
		    "</div>".
			"</div>";
		?>	
		</div>
        </div>		
		<?php	
		if($flag==6)
			 $flag=0;
		 else $flag=$flag+1;
	}
	?>
   </marquee>
   </div>
   </div>
   <?php
   
   
   }
}
}
?>