<?php
   $servername = "localhost";
    $user = "root";
    $mysqlPassword = "";
    $dbname="blood";
    $link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
	//echo "welcom";
if(isset($_POST['rname'])&& isset($_POST['rid'])&& isset($_POST['bgp'])&& isset($_POST['orgid'])&& isset($_POST['amts']))
{
   $rname= $_POST["rname"];
   $rid= $_POST["rid"];
   $oid= $_POST["orgid"];
   $bgp =($_POST["bgp"]);
   $amt= $_POST["amts"];
   $sql="SELECT * FROM `org` WHERE `oid` LIKE '$oid'" ;
	$sql1="SELECT * FROM `bloods` WHERE `oid` LIKE '$oid'";
	$sql2="SELECT * FROM `doner2` WHERE `Oid` LIKE '$oid'";
	$sql3="SELECT * FROM `reciever2` WHERE `orgid` LIKE '$oid'";
	$result3=mysqli_query($link,$sql3);
	$result2=mysqli_query($link,$sql2);
	$result1=mysqli_query($link,$sql1);
	$result=mysqli_query($link,$sql);
	$count1=mysqli_num_rows($result2);
	$count2=mysqli_num_rows($result3);
    $count=mysqli_num_rows($result);
    $count3=mysqli_num_rows($result);
	$count4=0;
	
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
background-size:1370px 820px;
}
span.tab-space {padding-left:10em;}
</style>
</head>
<body>

<div class="container">
  <h2><font color="gray">Blood Organisation</font></h2>
  <ul class="nav nav-tabs">
    <li ><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Doner</a></li>
    <li class="active"><a data-toggle="tab" href="#menu2">Reciever</a></li>
    <li><a data-toggle="tab" href="#menu3">Event</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade">
	<div align="center">
      <?php
	if($row1=mysqli_fetch_assoc($result1))
	{
		$count4=$row1[$bgp];
		$count4=$count4 - $amt;
    }
	 while($row = mysqli_fetch_assoc($result))
   {   
	    echo "<h1 align='center'><font color='red'>{$row['oname']} Blood Organisation</font></h1>".
	        "<h3 align='center'><font color='white'>(A {$row['otype']} organization)</font><h3><br>".
            "<font color='white'>Number of Doner:$count1 </span> <span class='tab-space'></span><span class='tab-space'></span> Number of Reciever:$count2</font><br><br>".
            "<div class='container'><font color='white'>
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
             <td>{$row1['A']}</td>
             <td>{$row1['-A']}</td>
             <td>{$row1['B']}</td>
             <td>{$row1['-B']}</td>
			 <td>{$row1['O']}</td>
             <td>{$row1['-O']}</td>
			 <td>{$row1['AB']}</td>
             <td>{$row1['-AB']}</td>
            </tr>
           </tbody>
           </table></font>
           </div><br>".
            "<font color='white'>Address:{$row['address']} &nbsp {$row['city']} &nbsp {$row['pincode']}<br>".
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
       <label for="name"><font color="white">Name of Donar :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="dname" placeholder="Name of Donar">
      </div>
	  <div class="form-group" align="center">
       <label for="Did"><font color="white">Donar ID :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="Did" placeholder="Donar ID">
      </div>
	  <div class="form-group" align="center">
       <label for="Oid"><font color="white">Organisation ID :</font></label>
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
       <label for="amt"><font color="white">Amount of Blood :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="amount" placeholder="Amount of Blood">
    </div>
	<br>
	<button type="submit" class="btn btn-default">Submit</button>		 
	  </form>
	  </div>
	  
    </div>
    <div id="menu2" class="tab-pane fade in active">
     
	 <br><br>
      <div align="center">
	  <?php
	    //echo $bgp;
         if(mysqli_query($link,"INSERT INTO reciever2(rname,rid,orgid,bgp,amts) VALUES ('$rname','$rid','$oid','$bgp','$amt')") && mysqli_query($link,"UPDATE bloods SET $bgp='$count4' WHERE oid='$oid'") )
		 {
			echo "<font size='5' color='blue'>Successfully submit</font>"; 
		    //<br><br>
      ?>
	  <div align="center">
     <form role="form"   action="reciever.php" method="post">
      <div class="form-group" align="center">
       <label for="name"><font color="white">Name of Reciever :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="rname" placeholder="Name of Reciever">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">Reciever ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="rid" placeholder="Reciever ID">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">Organisation ID :</font></label>
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
       <label for="name"><font color="white">Amount of Blood :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="amts" placeholder="Amount of Blood">
    </div>
	<br>
	<button type="submit" class="btn btn-default">Submit</button>
    </div>
	</form>
	<?php 
		 }
         else 
		 {echo "<font size='5' color='blue'>sorry wrong input</font> ";
        ?>
	 <div align="center">
     <form role="form"   action="reciever.php" method="post">
      <div class="form-group" align="center">
       <label for="name"><font color="white">Name of Reciever :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="rname" placeholder="Name of Reciever">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">Reciever ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="rid" placeholder="Reciever ID">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">Organisation ID :</font></label>
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
       <label for="name"><font color="white">Amount of Blood :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="amts" placeholder="Amount of Blood">
    </div>
	<br>
	<button type="submit" class="btn btn-default">Submit</button>
	</form>
    </div>
	<?php	 
	 }
	?>	
	</div>	
    </div>
    <div id="menu3" class="tab-pane fade">
      <br><br>
      <div align="center">
     <form role="form"   action="event.php" method="post">
      <div class="form-group" align="center">
       <label for="name"><font color="white">Name of Event :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="ename" placeholder="Name of Event">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">Organisation ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="orgid" placeholder="Organisation ID">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">address:</font></label>
       <input type="text" class="form-control" style="width:500px; "name="add" placeholder="address">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">city:</font></label>
       <input type="text" class="form-control" style="width:500px; "name="city" placeholder="city">
      </div>
	  
	<div class="form-group" align="center">
       <label for="name"><font color="white">Date:</font></label>
       <input type="date" class="form-control" style="width:500px; "name="date" placeholder="date"">
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="white">Time:</font></label>
       <input type="time" class="form-control" style="width:500px; "name="time" placeholder="time">
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="white">Email:</font></label>
       <input type="email" class="form-control" style="width:500px; "name="time" placeholder="email">
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="white">contact:</font></label>
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
else
  echo "no";
?>