
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
 .fixed-panel {
  min-height: 10;
  max-height: 10;
  overflow-y: scroll;
}
 
 .jumbotron {
      background-color: #222222;
      color: #fff;
  }
  
  .floating-box {
    display: inline-block;
    width: 800px;
    height: 400px;
    margin: 10px;
    border: 4px solid #73AD21;
}

  
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
  
h3{
background-image:url(03.gif-c200);
background-repeat:no-repeat;
background-position:0px 1600px;
background-size:100%;
 
}
#section1 {padding-top:0px;height:800px;color: #fff;background-color: #673ab7;}
#section2 {padding-top:50px;height:900px;color: #fff; background-color: #673ab7;}
#section5 {padding-top:50px;height:900px;color: #fff; background-color: #;}
#section3 {padding-top:50px;color: #fff; background-image:url(03.jpg); image-repeat:no-repeat; }
  </style>
  <style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("23.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("02.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("23.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
</style>
</head>
  
</head>
<body>
<a href="#section1"><div class="container-fluid" style="height:670px; background-image:url(j02.gif);background-color:black; background-size:1370px 670px;background-repeat:no-repeat;
background-position:0px 0px;font-family:'AR CENA'">


<div class="bgimg-1">
  <div class="caption">
  <h1><center>
  <font color='white' ></font></center></h1>
  
  </div>
</div>
</div></a>
<div id="section1"  style="background-image:url(07.jpg);image-repeat:no-repeat;backround-size:1400px 670px">


<div style="position:absolute;left:60px;top:770px;font-family:'AR CENA';">
    <h2 align="center"><font color="black">Total Doner</font></h2>
    <img src="05.jpg" alt="Bird" class="img-circle">
 
<?php
	$servername = "localhost";
    $user = "root";
    $mysqlPassword = "";
    $dbname="blood";
    $link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
	
	$result=mysqli_query($link,"select * from doner1");
	$count=mysqli_num_rows($result);
	echo "</br></br><div align='center'><font size='6'color='black'>$count</font></div>";
	?>

  
  
</div>
  

  <div style="position:absolute;left:540px;top:770px;font-family:'AR CENA';">
    <h2 align="center"><font color="black">Total Request</font></h2>
    <img src="06.jpg" alt="Bird" class="img-circle">
	
	
	
	 
	<?php
	echo "</br></br><div align='center'><font size='6'color='black'>20</font></div>";?>
    <!--<h3><font color="black">I'm an adventurer</font></h3>-->
  </div>
 
 
 <div style="position:absolute;left:990px;top:770px;font-family:'AR CENA';" >
    <h2 align="center"><font color="black">Total Blood Bank</font></h2>


    <img src="15.jpg" alt="Bird" class="img-circle">
	
	
	
	<?php
	$servername = "localhost";
    $user = "root";
    $mysqlPassword = "";
    $dbname="blood";
    $link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
	
	$result=mysqli_query($link,"select * from org");
	$count=mysqli_num_rows($result);
	echo "</br></br><div align='center'><font size='6'color='black'>$count</font></div>";
	?>
    <!--<h3><font color="black">Total Blood Bank</font></h3>-->
  </div>
     
  
<span class="same-scroll brand-header text-center" style="margin-left:20px">
<nav  class="navbar navbar-inverse" data-spy="affix" data-offset-top="685">
  <ul class="nav navbar-nav">
    <li ><a href="#section1">Home </a></li>
    <li ><a href="#section2">Search Donars</a></li>
	<li ><a href="#section4">Search Organisation</a></li>
    <li data-toggle="modal" data-target="#myModal1"><a href="#myModal1">Register as Donar</a></li>
    <li ><a href="#section2">Request Blood</a></li>
<li><a href="#section3">Blood Tips</a></li>
<li><a href="#section5">About us</a></li>
<li data-toggle="modal" data-target="#myModal2"><a href="#myModal2">Register as Organisation</a></li>
   <li data-toggle="modal" data-target="#myModal3"><a href="#myModal3">SignIn </a></li>
	</ul>
</nav>
</span>
 <!-- </div> -->

 <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position:relative;left:0%;top:400px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active" align="center">
        <h3><font color="black" style="align:center;left:500px;"><strong>MUMBAI</strong></font></h3>
          <h4><font color="black" style="align:center;">K.E.M Hospital and Blood Organisation</font></h4>
      </div>

      <div class="item" align="center">
        
 
          <h3><font color="black"><strong>NAGPUR</strong></h3>
          <h4><font color="black">MEO Hospital and Blood Organisation</font></h4>
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
 
 <div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

 

<div id="section2" class="container-fluid" style="height:670px; background-image:url(16.jpg);background-color:black; background-size:1370px 670px;background-repeat:no-repeat;
background-position:0px 0px;font-family:'AR CENA'">

     <h2 align="center"><font color='#ff5c33'  size="10" ><strong>**Search Donar**<strong></font></h2>
	 </br></br>
	  <form  align="center" role="form"  class="form-signin" action="s01.php" method="post">
	 
	 
        
		
		<div >
       <label for="city"><font color='#b3b300'  size="5" >Select Blood Group</font> </label></br>
	  <button  style="width:470px "; class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      <select class="form-control"  name="bg">
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
</br></br>		
		
		<div  class="form-group" align="center">
		<label for="city"><font color='#b3b300'  size="5" >City</font></label></br>
		<input align="center" style="width:470px "; type="text" class="form-control" name="city" placeholder="     City">
		</div>
		</br></br>
		<div class="form-group" align="center">
		<font color='white'  size="5" >
			<input  style="width:270px;left:200px" ; name="submit" type="submit" value="submit" class="btn btn-primary">
		</font>
	</div>
     </form>
            
  
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>


<div id="section4" class="container-fluid" style="height:670px; background-image:url(03.jpg);background-color:black; background-size:5000px 670px;background-repeat:no-repeat;
background-position:0px 0px;font-family:'AR CENA'">
</br></br></br>
<h2 align="center"><font color='#ff5c33'  size="10" ><strong>**Search Organisation**<strong></font></h2>

<form role="form"  class="form-signin" action="#section4" method="post">
  <input type="text" style="left=100" name="search" placeholder="       Search..">
</br></br>
  </form>

 <div align="center"> 
<div class="panel panel-primary"  style=" width:1000px ">
  
  <div class="panel-body fixed-panel"  style=" width:1000px ;min-height: 0px; max-height: 400px;background-color:gray " >

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
	    echo "<div class='thumbnail' align='center' style='background-color:$a[$flag];position:relative;left:100px;width:500px'>".
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
</div>
</div>	
</div>
</div>	

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>




<div id="section3" class="container-fluid" style="height:50%px; background-image:url(03.jpg);background-color:black; background-size:1370px 1200px;background-repeat:no-repeat;
background-position:0px 0px;font-family:'AR CENA'"">
</br>
</br>
<h2 align="center"><font color='#0099ff'  size="10" ><strong>++Some Blood Tips++<strong></font></h2>
	 </br></br>
	 
</br>
<div class="container">
  <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo1">Beat the myth</button>
  <div id="demo1" class="collapse" >
 <font color="black">
 Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:

You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.
Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.
If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.
Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.
Blood will be separated into components within eight hours of donation
The blood will then be taken to the laboratory for testing.
Once found safe, it will be kept in special storage and released when required.
The blood is now ready to be taken to the hospital, to save lives.
</font>
  </div>
  
</div>
<div class="container">
  <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo2">Blood Groups</button>
  <div id="demo2" class="collapse">
 <font color="black">
 Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as the Rhesus factor that has come to us from Rhesus monkeys.
</br>
Most humans are in the ABO blood group. The ABO group has four categories namely 
1) A group 2) B group 3) O group and 4) AB group
In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.
</br>
Thus blood group of any human being will mainly fall in any one of the following groups. </br>
A positive or A negative </br>
B positive or B negative </br>
O positive or O negative </br>
AB positive or AB negative.</br>
</font>
  </div>
</div>

<div class="container">
  <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo3">DO donate blood, only if you satisfy all of the following conditions</button>
  <div id="demo3" class="collapse">
<font color="black">
-	You are between age group of 18-60 years.</br>
-	Your weight is 45 kgs or more.</br>
-	Your hemoglobin is 12.5 gm% minimum.</br>
-	Your last blood donation was 3 or more months earlier.</br>
-	You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</br>
</font>
  </div>
</div>

<div class="container">
  <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo4">DO NOT donate blood, if you have any of the following conditions</button>
  <div id="demo4" class="collapse">
<font color="black">
-	Cold / fever in the past 1 week.</br>
-	Under treatment with antibiotics or any other medication.</br>
-	Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.</br>
-	Major surgery in the last 6 months.</br>
-	Vaccination in the last 24 hours.</br>
-	Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.</br>
-	Had fainting attacks during last donation.</br>
-	Have regularly received treatment with blood products.</br>
-	Shared a needle to inject drugs/ have history of drug addiction.</br>
-	Had sexual relations with different partners or with a high risk individual.</br>
-	Been tested positive for antibodies to HIV.
</font>
  </div>
</div>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>



<div id="section5">
<div class="jumbotron text-center">
  <h1 style="font-family:'AR CENA';color:#ccffe6">About us</h1>
  <div class="container text-center">
  
  <p style="font-family:'AR BERKLEY';color:#ff5c33"><font size=6>Our Special Thanks To Mrs.Pramila Chavan  mam for her kind gauidance</font></p>
    <div class="row">
    <div class="col-sm-2">
      <p style="font-family:'AR BLANCA'"><strong>Animesh C.</strong></p>
	  <p style="color:#00b300"><strong>(data analyser)</strong></p>
	  <img  src="28.jpg" alt="Random Name" class="img-circle" width="200" height="200"></br>
      <a href="https://www.facebook.com/sunanimesh"><img src="24.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	  <a href=""><img src="25.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	   <a href="https://in.linkedin.com/in/animesh-chaudhary-a98b58125?trk=prof-samename-name"><img src="26.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	 	</div>
    <div class="col-sm-4">
      <p style="font-family:'AR BLANCA'"><strong>Tanmay Muneshwar</strong></p>
	  <p style="color:#00b300"><strong>(data analyser)</strong></p>
	  <img src="30.jpg" alt="Random Name" class="img-circle" width="200" height="200"></br>
     <a href="https://www.facebook.com/tanmay.muneshwar"><img src="24.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	  <a href=""><img src="25.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	   <a href=""><img src="26.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	     </div>
    <div class="col-sm-2">
      <p style="font-family:'AR BLANCA'"><strong>Vikas Khairnar</strong></p>
	  <p style="color:#00b300"><strong>(web developer)</strong></p>
      <img src="27.jpg" alt="Random Name" class="img-circle" width="200" height="200"></br>
      <a href="https://www.facebook.com/vikas.khairnar.3"><img src="24.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	  <a href="https://twitter.com/vkk231996"><img src="25.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	   <a href="https://www.linkedin.com/in/vikas-khairnar-116105126"><img src="26.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	 
	      </div>
	<div class="col-sm-4">
      <p style="font-family:'AR BLANCA'"><strong>Sudhanshu Bhadarwar</strong></p>
      <p style="color:#00b300"><strong>(web developer)</strong></p>
 	  <img src="29.jpg" alt="Random Name" class="img-circle" width="200" height="200"></br>
      <a href="https://www.facebook.com/people/Sudhanshu-Bhandarwar/100007888574965"><img src="24.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	  <a href="https://twitter.com/srb12031996"><img src="25.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	   <a href="https://in.linkedin.com/in/sudhanshu-bhandarwar-215a78125"><img src="26.jpg" class="img-circle" alt="Random Name" width="40" height="40"></a>
	    </div>
  </div>
</div>


  
</div>

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
      <div class="modal-content" align="center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Blood Bank</h4>
        </div>

		<div class="container" style=" width: inherit;">
        <h2>Personal Signup</h2>
		<form role="form"  class="form-signin" action="p04.php" method="post">
		<div  class="form-group">
        		
		<label for="fname">Frist Name:</label>
		
		<input type="text" class="form-control" name="fname" placeholder="First Name">
		</div>
		<div  class="form-group">
		<label for="lname">Last Name:</label>
		<input type="text" class="form-control" name="lname" placeholder="Last Name">
		</div>
		</br>
		<div >

	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Blood Group
      <select class="form-control"  name="sel">
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
		
         <div  class="form-group">
        		
		<label for="city" class="col-sm-2 control-label">CITY:</label>
		
		<input type="text" class="form-control" name="city" placeholder="City">
		</div>
		 
    </br>
	
		<div  class="form-group">
		<label for="em">E-mail</label>
		<input type="email" class="form-control" name="em" placeholder="Email address">
		</div>
		<div  class="form-group">
		
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" name="pwd" placeholder="Enter password">
		</div>
		<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input  name="submit" type="submit" value="submit" class="btn btn-primary">
		</div>
	</div>
     </form>
    </div>
	    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
      
    </div>
</div>
  
  
  
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" align="center">
    
     <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Blood Bank</h4>
    </div>

	<div class="container" style=" width: inherit;">
        <h3>Organisation Signup</h3>
		<form role="form"  class="form-signin" action="organisation.php" method="post">
	 <div >
		<label for="fname">Organisation Name:</label>
		<input type="text" class="form-control" name="oname" placeholder="Organisation Name">
		<label for="lname">Organisation ID</label>
		<input type="text" class="form-control" name="oid" placeholder="Organisation Unique ID">
	 </div>

    </br>
	<div >

	     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Organisation Type
         <select class="form-control"  name="orgt">
         <option value="private">Private</option>
         <option value="goverment">Goverment</option>
    </select>
    </div>
    </br>
    <div>
	    <label for="lname">Organisation Address</label>
		<input type="text" class="form-control" name="oadd" placeholder="Address">
		<label for="lname">city</label>
		<input type="text" class="form-control" name="ocity" placeholder="ocity">
        <label for="lname">PIN Code</label>
		<input type="text" class="form-control" name="opin" placeholder="Pincode">
		<label for="lname">Contact No </label>
		<input type="text" class="form-control" name="ocno" placeholder="Contact NO">
	</div>

		<div><label for="em">E-mail</label>
		<input type="email" class="form-control" name="oem" placeholder="Email address">
		</div>
		<div >
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" name="opwd" placeholder="Enter password">
		</div>
		<div class="checkbox">
		<label><input type="checkbox"> Accept term and condition</label>
		</div>
		</br></br>
		<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div></div></div></div>
  
  
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    <style>
	form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<form role="form"  class="form-signin" action="1.php" method="post" style="width:570px;background-color:white"  >
  <div class="imgcontainer">
    <h3>Sign In</h3></br>
	<img src="j05.gif" alt="Avatar" class="avatar">
  </div>

  <div align="center" style="width:560px"  class="container">
    <label><b align="center">Username</b></label>
    <input align="center" style="width:470px " type="text" placeholder="Enter Username" name="id" required>
    </br>
    <label><b align="center">Password</b></label>
    <input align="center" style="width:470px " type="password" placeholder="Enter Password" name="pwd" required>
    </br>    
    <button align="center" style="width:270px " type="submit">Login</button>
	</br>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div style="width:570px " class="container" style="background-color:#f1f1f1">
    <button style="width:100px " type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
	  </div>
</form>
</body>
	
	
	
	
   </div></div>  
  
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
    }, 1500, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if 
  });
})
</script>
</body>
</html>

