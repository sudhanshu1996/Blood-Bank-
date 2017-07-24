<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="blood";
$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);

  if(isset($_POST[submit]))
  {
	$name=$_POST["fname"];
	$last=$_post["lname"];
//	$bgrp=$_post["sel"];
	$email=$_post["em"];
	$pass=$_post["pwd"];
	
	if(!empty($name)&&!empty($last)&&!empty($email)&&!empty($pass))
	{
	
		/*$sql=mysql_query("INSERT INTO signup(name,lastname,bloodgp,email,password) 
			VALUES ('$name','$last','$bgrp','&email','&pass')");
		if($sql==true)
		{
			echo "sucessfull";
		}	
        else echo "fail"; */	
		
         if(mysqli_query($link,"INSERT INTO `doner`(`fname`, `lname`, `email`, `pass`) VALUES ('$name','$last','&email','&pass')"))
			{
				echo "New records created successfully";
				exit();
			}	
	     else
	     {
		  echo "Something went Wrong  "; 
	      }
		  
	}
	else 
	{
		echo 'All field are menditory '; 
	}
  }
  else{
	  echo 'All field'; 
  }
?>
