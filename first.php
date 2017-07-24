<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="blood_bank";
$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);

if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['sel1'])&&isset($_POST['em'])&&isset($_POST['pwd'])&&(isset($_post[check])&&$_post[check]=='yes'))
{
	$name=$_POST["fname"];
	$last=$_post["lname"];
	$bgrp=$_post["sell"];
	$email=$_post["em"];
	$pass=$_post["pwd"];
	
	if(!empty($fname)&&!empty($lname)&&!empty($sell)&&!empty($em)&&!empty($pwd))
	{
		/*$sql=mysql_query("INSERT INTO signup(name,lastname,bloodgp,email,password) 
			VALUES ('$name','$last','$bgrp','&email','&pass')");
		if($sql==true)
		{
			echo "sucessfull";
		}	
        else echo "fail"; */	
         if(mysqli_query($link,"INSERT INTO signup(name,lastname,bloodgp,email,password)VALUES ('$name','$last','$bgrp','&email','&pass')"))
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
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
 
h3{
background-image:url(03.gif-c200);
background-repeat:no-repeat;
background-position:0px 1600px;
background-size:100%;
 
}
#section1 {padding-top:0px;height:800px;color: #fff; background-image:url(07.jpg);}
#section2 {padding-top:50px;height:900px;color: #fff; background-color: #673ab7;}
  </style>
</head>
<body>

<a href="#section1"><div class="container-fluid" style="height:670px; background-image:url(02.jpg);background-color:black; background-size:1370px 300px;background-repeat:no-repeat;
background-position:0px 280px;">
  <br><br><br><br><br><br><br><br><br><h1><center><font color='black' ></font></center></h1>
  <h2 align="center"><font color='white' ><strong>Excuse never save a life<strong></font></h2>
  <h2 align="center"><font color="white" size="10"><strong>BLOOD DONATION<br>DOES</strong></font></h2>
  

</div></a>
<div id="section1">
<span class="same-scroll brand-header text-center" style="margin-left:20px">
<nav  class="navbar navbar-inverse" data-spy="affix" data-offset-top="685">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#section1">Home </a></li>
    <li ><a href="#section1">Search Donars</a></li>
    <li data-toggle="modal" data-target="#myModal1"><a href="#myModal1">Register as Donar</a></li>
    <li ><a href="#section2">Request Blood</a></li>
<li><a href="#">Blood Tips</a></li>
<li data-toggle="modal" data-target="#"><a href="#">Contact us</a></li>
<li data-toggle="modal" data-target="#myModal2"><a href="#myModal2">Register as Organisation</a></li>
   
	</ul>
</nav>
</span>
 <!-- </div> -->

 <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position:relative;left:0%;top:100px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h3><font color="black" style="align:center;">New York</font></h3>
          <p><font color="black" style="align:center;">The atmosphere in New York is lorem ipsum.</font></p>
        
      </div>

      <div class="item">
        
 
          <h3><font color="black">Chicago</h3>
          <p><font color="black">Thank you, Chicago - A night we won't forget.</font></p>
      </div>
    
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
 
</div> 
 

<div id="section2" class="container-fluid" style="height:1000px">
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <div style="height:1000px">
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1></div>
  <div style="height:1000px">
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1></div>
  <div style="height:1000px">
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1></div>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
</div>

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SIGNUP</h4>
        </div>
			 <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Blood Bank</h4>
        </div>

		<div class="container" style=" width: inherit;">
        <h2>Personal Signup</h2>
		<form role="form"  class="form-horizontal" action="first.php" method="post">
		<div >
		
		
      
		
		
		<label for="fname">Frist Name:</label>
		
		<input type="text" class="form-control" id="fname" placeholder="First Name">
		
		<label for="lname">Last Name:</label>
		<input type="text" class="form-control" id="lname" placeholder="Last Name">
		</div>

    </br>
	<div >

	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Blood Group
      <select class="form-control"  id="sel1">
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
		<div><label for="em">E-mail</label>
		<input type="email" class="form-control" id="em" placeholder="Email address">
		</div>
		<div >
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd" placeholder="Enter password">
		</div>
		<div class="checkbox">
		<label><input type="checkbox" name="check" value="yes"> Accept term and condition</label>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
     </form>
    </div>
	    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
      
    </div>
</div>
  
  
  
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
     <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Blood Bank</h4>
    </div>

	<div class="container" style=" width: inherit;">
        <h3>Organisation Signup</h3>
		<form role="form"  class="form-horizontal">
	 <div >
		<label for="fname">Organisation Name:</label>
		<input type="text" class="form-control" id="oname" placeholder="Organisation Name">
		<label for="lname">Organisation ID</label>
		<input type="text" class="form-control" id="oid" placeholder="Organisation Unique ID">
	 </div>

    
	<div >

	     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Organisation Type
         <select class="form-control"  id="orgt">
         <option value="private">Private</option>
         <option value="goverment">Goverment</option>
    </select>
    </div>
    
    <div>
	    <label for="lname">Organisation Address</label>
		<input type="text" class="form-control" id="oadd" placeholder="Address">
		<label for="lname">city</label>
		<input type="text" class="form-control" id="oadd" placeholder="ocity">
        <label for="lname">PIN Code</label>
		<input type="text" class="form-control" id="opin" placeholder="Pincode">
		<label for="lname">Contact No </label>
		<input type="text" class="form-control" id="ocno" placeholder="Contact NO">
	</div>

		<div><label for="em">E-mail</label>
		<input type="email" class="form-control" id="oem" placeholder="Email address">
		</div>
		<div >
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="opwd" placeholder="Enter password">
		</div>
		<div class="checkbox">
		<label><input type="checkbox"> Accept term and condition</label>
		</div>
		</br></br>
		<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
  
  
  
  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if 
  });
})
</script>
</body>
</html>