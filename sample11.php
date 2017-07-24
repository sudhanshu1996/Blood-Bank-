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
	$sql="SELECT * FROM `org` WHERE `oid` LIKE '$orgid' AND `pass1` LIKE '$password'" ;
	$sql1="SELECT * FROM `bloods` WHERE `oid` LIKE '$orgid'";
	$sql2="SELECT * FROM `doner2` WHERE `Oid` LIKE '$orgid'";
	$sql3="SELECT * FROM `reciever2` WHERE `orgid` LIKE '$orgid'";
	$result3=mysqli_query($link,$sql3);
	$result2=mysqli_query($link,$sql2);
	$result1=mysqli_query($link,$sql1);
	$result=mysqli_query($link,$sql);
	$count1=mysqli_num_rows($result2);
	$count2=mysqli_num_rows($result3);
    $count=mysqli_num_rows($result);
	//echo $count;
	$flag1=0;
	if($count==1)
	{
		$flag1=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
body{
background-image:URL(23.jpg);
background-repeat:no-repeat;
background-position:0px 0px;
background-size:1370px 820px;}
span.tab-space {padding-left:5em;}
</style>
</head>
<body>
<br>
<div class="container">
  <h2><font color="gray">Blood Organisation</font></h2>
  <form role="form" action="tm.php#section1" method="post" style="position:absolute;left:1180px;top:50px;">
  <button name="button" class="btn btn-primary" value="OK"  color="red" type="submit">LogOut</button>
  </form>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Doner</a></li>
    <li><a data-toggle="tab" href="#menu2">Reciever</a></li>
    <li><a data-toggle="tab" href="#menu3">Event</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	<div align="center">
	<?php
	$row1=mysqli_fetch_assoc($result1);

	 while($row = mysqli_fetch_assoc($result))
   {   
	    echo "<h1 align='center'><font color='red'>{$row['oname']} Blood Organisation</font></h1>".
	        "<h3 align='center'><font color='yellow'>(A {$row['otype']} orgonization)</font><h3><br>".
            "<font color='yellow'>Number of Doner:$count1 <span class='tab-space'></span><span class='tab-space'></span> <span class='tab-space'></span><span class='tab-space'></span> Number of Reciever:$count2</font><br><br>".
            "<div class='container'><font color='yellow'>
            <h3>Amount of Blood Available:</h3></font>
            <table class='table'>
            <thead>
            <tr class='danger'>
            <th>Blood Group</th>
            <th>A</th>
            <th>-A</th>
			<th>B</th>
            <th>-B</th>
			<th>O</th>
            <th>-O</th>
			<th>AB</th>
            <th>-AB</th>
            </tr></font>
            </thead>
            <tbody>
            <tr class='success'>
			 <th scope='row'>Amount(ML)</th>
             <td>{$row1['A+']}</td>
             <td>{$row1['A-']}</td>
             <td>{$row1['B+']}</td>
             <td>{$row1['B-']}</td>
			 <td>{$row1['O+']}</td>
             <td>{$row1['O-']}</td>
			 <td>{$row1['AB+']}</td>
             <td>{$row1['AB-']}</td>
            </tr>
           </tbody>
           </table>
           </div><br>".
            "<font color='yellow'>Address:{$row['address']} &nbsp {$row['city']} &nbsp {$row['pincode']}<br>".
            "contact no:{$row['contact_no']} <br>".
			"Email:{$row['email']} </font><br>";
	 }
     ?>
    </div>
	</div>
    <div id="menu1" class="tab-pane fade">
      <br><br>
	  <div align="center">
      <form  role="form"   action="doner.php" method="post">
      <div class="form-group" align="center">
       <label for="name"><font color="yellow">Name of Donar :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="dname" placeholder="Name of Donar">
      </div>
	  <div class="form-group" align="center">
       <label for="Did"><font color="yellow">Donar ID :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="Did" placeholder="Donar ID">
      </div>
	  <div class="form-group" align="center">
       <label for="Oid"><font color="yellow">Organisation ID :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="orgid" placeholder="Organisation ID ">
      </div>
	  <div >
       <label for="city"><font color='yellow'>Select Blood Group</font> </label></br>
	  <button  style="width:200px "; class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      <select class="form-control"  name="blood">
       <option value="" disabled selected>Choose your option</option>       
	   <option value="a+">A+</option>
        <option value="a-">A-</option>
        <option value="b+">B+</option>
        <option value="b-">B-</option>
        <option value="o+">O+</option>
        <option value="o-">O-</option>
        <option value="ab+">AB+</option>
        <option value="ab-">AB-</option>
 
 </select>
 
    </div>
	<div class="form-group" align="center">
       <label for="amt"><font color="yellow">Amount of Blood :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="amount" placeholder="Amount of Blood">
    </div>
	<br>
	<button type="submit" class="btn btn-default">Submit</button>
    </form>
	</div>
	</div>
	
    <div id="menu2" class="tab-pane fade">
      <br><br>
      <div align="center">
     <form role="form"   action="reciever.php" method="post">
      <div class="form-group" align="center">
       <label for="name"><font color="yellow">Name of Reciever :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="rname" placeholder="Name of Reciever">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="yellow">Reciever ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="rid" placeholder="Reciever ID">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="yellow">Organisation ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="orgid" placeholder="Organisation ID">
      </div>
	  <div >
       <label for="city"><font color='yellow'>Select Blood Group</font> </label></br>
	  <button  style="width:200px "; class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      <select class="form-control"  name="blood">
       <option value="" disabled selected>Choose your option</option>       
	   <option value="a+">A+</option>
        <option value="a-">A-</option>
        <option value="b+">B+</option>
        <option value="b-">B-</option>
        <option value="o+">O+</option>
        <option value="o-">O-</option>
        <option value="ab+">AB+</option>
        <option value="ab-">AB-</option>
 
 </select>
 
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="yellow">Amount of Blood :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="amts" placeholder="Amount of Blood">
    </div>
	<br>
	<button type="submit" class="btn btn-default">Submit</button>
	</form>
    </div>
	</div>
	
    <div id="menu3" class="tab-pane fade">
      <br><br>
      <div align="center">
     <form role="form"   action="event.php" method="post">
      <div class="form-group" align="center">
       <label for="name"><font color="yellow">Name of Event :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="ename" placeholder="Name of Event">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="yellow">Organisation ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="orgid" placeholder="Organisation ID">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="yellow">address:</font></label>
       <input type="text" class="form-control" style="width:500px; "name="add" placeholder="address">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="yellow">city:</font></label>
       <input type="text" class="form-control" style="width:500px; "name="city" placeholder="city">
      </div>
	  
	<div class="form-group" align="center">
       <label for="name"><font color="yellow">Date:</font></label>
       <input type="date" class="form-control" style="width:500px; "name="date" placeholder="date"">
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="yellow">Time:</font></label>
       <input type="time" class="form-control" style="width:500px; "name="time" placeholder="time">
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="yellow">Email:</font></label>
       <input type="email" class="form-control" style="width:500px; "name="time" placeholder="email">
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="yellow">contact:</font></label>
       <input type="text" class="form-control" style="width:500px; "name="time" placeholder="contact">
    </div>
	<br>
	<button type="submit" class="btn btn-default">Submit</button>
	</form>
    </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
		
	}
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
   //$count50=mysqli_num_rows($result50);?>
   <form role="form" action="tm.php#section1" method="post" style="position:absolute;left:1180px;top:20px;">
  <button name="button" class="btn btn-primary" value="OK"  color="red" type="submit">LogOut</button>
  </form>
  <?php
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
   
   
   }   //end
	
	
}
}
    if($flag1==0) 
		echo "sorry no account found" ;
?>
