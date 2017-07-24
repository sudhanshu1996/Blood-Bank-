<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="blood";
$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
if(isset($_POST['id'])&&isset($_POST['pwd']))
{	
$orgid = mysqli_real_escape_string($link, $_POST["id"]);
$password = md5($_POST["pwd"]);

if(!empty($orgid)&&!empty($password ))
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
	if($count==1)
	{
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
background-image:URL(16.jpg);
background-repeat:no-repeat;
background-position:0px 0px;
background-size:1370px 680px;}
</style>
</head>
<body>
<br>
<div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	<?php
	$row1=mysqli_fetch_assoc($result1);
	 while($row = mysqli_fetch_assoc($result))
   {   
	    echo "<h1 align='center'><font color='white'>{$row['oname']}</font></h1><br>".
	        "<h3 align='center'><font color='white'>(A {$row['cty']} orgonization)</font><h3> <br>".
            "Number of Doner:$count1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Number of Reciever:$count2 <br>".
            "<div class='container'>
            <h3>Amount of Blood Available</h3>
            <table class='table'>
            <thead>
            <tr>
            <th>Blood Group</th>
            <th>A</th>
            <th>-A</th>
			<th>B</th>
            <th>-B</th>
			<th>O</th>
            <th>-O</th>
			<th>AB</th>
            <th>-AB</th>
            </tr>
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
           </table>
           </div>".
            "Address:{$row['add']} &nbsp {$row['city']} &nbsp {$row['pincode']}<br>".
            "contact no:{$row['contact_no']} <br>".
			"Email:{$row['email']} <br>";
		    
	}
     ?>
    </div>
	
    <div id="menu1" class="tab-pane fade">
      <br><br>
	  <div align="center">
      <form  role="form"   action="doner.php" method="post">
      <div class="form-group" align="center">
       <label for="name"><font color="white">Name of Donar :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="dname">
      </div>
	  <div class="form-group" align="center">
       <label for="Did"><font color="white">Donar ID :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="Did">
      </div>
	  <div class="form-group" align="center">
       <label for="Oid"><font color="white">Organisation ID :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="orgid">
      </div>
	  <div>

	     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><font color="white">Blood Group</font>
         <select class="form-control"  name="blood">
         <option name="A">A</option>
         <option name="-A">-A</option>
		 <option name="B">B</option>
		 <option name="-B">-B</option>
		 <option name="O">O</option>
		 <option name="-O">-O</option>
		 <option name="AB">AB</option>
		 <option name="-AB">-AB</option>
         </select>
    </div>
	<div class="form-group" align="center">
       <label for="amt"><font color="white">Amount of Blood :</font></label>
       <input type="text" class="form-control" style="width:500px; " name="amount">
    </div>
	<br>
	<button type="submit" class="btn btn-default">Submit</button>
    </div>
	</form>
    </div>
	
    <div id="menu2" class="tab-pane fade">
      <br><br>
      <div align="center">
     <form role="form"   action="reciever.php" method="post">
      <div class="form-group" align="center">
       <label for="name"><font color="white">Name of Reciever :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="rname">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">Reciever ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="rid">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">Organisation ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="orgid">
      </div>
	  <div >

	     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><font color="white">Blood Group</font>
         <select class="form-control"  name="bgp">
         <option name="A">A</option>
         <option name="-A">-A</option>
		 <option name="B">B</option>
		 <option name="-B">-B</option>
		 <option name="O">O</option>
		 <option name="-O">-O</option>
		 <option name="AB">AB</option>
		 <option name="-AB">-AB</option>
         </select>
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="white">Amount of Blood :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="amts">
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
       <label for="name"><font color="white">Name of Event :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="ename">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">Organisation ID :</font></label>
       <input type="text" class="form-control" style="width:500px; "name="orgid">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">address:</font></label>
       <input type="text" class="form-control" style="width:500px; "name="add">
      </div>
	  <div class="form-group" align="center">
       <label for="name"><font color="white">city:</font></label>
       <input type="text" class="form-control" style="width:500px; "name="city">
      </div>
	  
	<div class="form-group" align="center">
       <label for="name"><font color="white">Date:</font></label>
       <input type="date" class="form-control" style="width:500px; "name="date">
    </div>
	<div class="form-group" align="center">
       <label for="name"><font color="white">Time:</font></label>
       <input type="time" class="form-control" style="width:500px; "name="time">
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
}
}
?>

