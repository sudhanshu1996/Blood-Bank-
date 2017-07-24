<?php

$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="test";
$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);


	if (isset($_POST["submit"])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$bgrp=$_post["sel"];
		$email = $_POST['em'];
		$pass=$_post["pwd"];
		
		
		
		
 

	if (mysqli_query($link,"INSERT INTO `doner`(`fname`, `lname`, `bg`, `email`, `password`) VALUES ('$fname','$lname','$bgrp','&email','&pass')")) {
		$result='<div class="alert alert-success">Thank You !</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
	}
	




<div  class="form-group">

	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Blood Group
      <select class="form-control"  id="sel">
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
     </br>
	 
	 
	 ?>