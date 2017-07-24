<?php
   $servername = "localhost";
    $user = "root";
    $mysqlPassword = "";
    $dbname="blood";
    $link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
if(isset($_POST['id'])&&isset($_POST['pwd']))
{	
$did = mysqli_real_escape_string($link, $_POST["id"]);
$password = md5($_POST["pwd"]);
if(!empty($did)&&!empty($password))
{   $sql50="SELECT * FROM event2";
   	//mysql_select_db('blood');
	$result50=mysqli_query($link,$sql50);
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
   <h1 align="center"><font color="blue">WELCOME</font></h1>
   <?php
   $count5=mysqli_num_rows($result5);
   $a=array("#ffe066","#bb99ff");
   $flag=0;
  // echo $count;
  ?>
  </br></br>
  <marquee behavior="scroll" direction="up" style="height:500px;" scrollamount="4"><?php
   while($row50 = mysqli_fetch_assoc($result50))
   {    $abc=$row50['oid'];
        $sql51="SELECT * FROM org WHERE oid='$abc'";
		$result51=mysqli_query($link,$sql51);
        $row51=mysqli_fetch_assoc($result51);
	    echo "<div class='thumbnail' style='background-color:$a[$flag];position:relative;left:400px;width:900px'>".
	        "<div class='row'>".
			"<div class='col-sm-4'>".
			"name of camp:{$row50['ename']} <br>".
			"Arrange BY:{$row51['oname']}<br>".
            "address:{$row50['addr']} <br>".
			"city:{$row50['city']} <br>".
            "date:{$row50['date']} <br>".
            "time:{$row50['time']} <br>".
            "Email:{$row50['email']} <br>".
            "contact no:{$row50['contact']} <br>".
			"</div>".
			"</div>".
		    "</div>";
		if($flag==1)
			 $flag=0;
		 else $flag=1;
	}
	?>
   </marquee>
<?php   
//}
}
}
?>
