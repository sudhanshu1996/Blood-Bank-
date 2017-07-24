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
  
  if(isset($_POST['id'])&&isset($_POST['pwd'])){
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $id= $_POST["id"];
   $password = md5($_POST["pwd"]);
   
   $sql1= "SELECT * FROM doner1 where did='$id' AND pass='$password'";
   mysql_select_db('blood');
   $retval1 = mysql_query( $sql1, $conn );
   $result=mysqli_query($link,"SELECT * FROM doner1 where did='$id' AND pass='$password'");
	$count1=mysqli_num_rows($result);
   $flag1=0;
  // echo $count1;
   if($count1==1){
	   $flag1=1;
	      $servername = "localhost";
    $user = "root";
    $mysqlPassword = "";
    $dbname="blood";
    $link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
//if(isset($_POST['email']) && isset($_POST['pass']))
//{
	$sql="SELECT * FROM camp";
	//mysql_select_db('blood');
	$result=mysqli_query($link,$sql);
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
   $n="SELECT * FROM doner1 where did='$id'";
   $res=mysqli_query($link,$n);
   while($r = mysqli_fetch_assoc($res))
   { 
     echo "<div style='color:red;position:relative;left:900px'>".
	    "<font size='5'>".
		"{$r['fname']}".
	   " {$r['lname']} <br>".
        "</font>".
		"</div>";
   }
   $count=mysqli_num_rows($result);
   $a=array("#ffe066","#bb99ff");
   $flag=0;
  // echo $count;
   while($row = mysqli_fetch_assoc($result))
   {   
	    echo "<div class='thumbnail' style='background-color:$a[$flag];position:relative;left:400px;width:900px'>".
	        "<div class='row'>".
			"<div class='col-sm-4'>".
			"name of camp:{$row['campn']} <br>".
	        "city:{$row['cty']} <br>".
            "address:{$row['addr']} <br>".
            "date:{$row['date']} <br>".
            "time:{$row['time']} <br>".
            "Email:{$row['mail']} <br>".
            "contact no:{$row['contact']} <br>".
			"</div>".
			"</div>".
		    "</div>";
		if($flag==1)
			 $flag=0;
		 else $flag=1;
	    
         
   }
	
}
   $sql2= "SELECT * FROM org where oid='$id' AND pass1='$password'";
   //mysql_select_db('blood');
   $retval2 = mysql_query( $sql2, $conn );
    //echo $id;
	
	//echo $password;
    $result1=mysqli_query($link,"SELECT * FROM org where oid='$id' AND pass1='$password'");
	$count2=mysqli_num_rows($result1);
    //echo $count2;
   if($count2==1){
	   $flag1=1;
	 echo " org login sucessful" ; 
	   
   }
   //echo $flag;
   
   if($flag1==0){
	   echo "no record found";
   }
   
   }
   ?>
   