<?php
   $servername = "localhost";
    $user = "root";
    $mysqlPassword = "";
    $dbname="blood";
    $link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);
	//if(isset($_POST['email']) && isset($_POST['pass']))
//{
	?>
  
  <!DOCTYPE html>
  <html>
  <head>	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
  .btn.outline {
	background: none;
	padding: 50px 22px;
   }
   .btn-primary.outline {
	border: 5px solid black;
	color: black;
   }
   
   </style>
   </head>
   <body >
   
   <br><br><br>
   <h1 align="center"><font color="blue">Application For Donor</font></h1>
   <div align="center">
    <form>
     <div class="form-group" align="center">
       <label for="name">Name of Donar :</label>
       <input type="text" class="form-control" style="width:500px; "id="name">
     </div>
     <div class="form-group">
	   <label for="bgrp">Blood Group:</label>
       <label class="checkbox-inline"><input type="checkbox" value="">A</label>
       <label class="checkbox-inline"><input type="checkbox" value="">-A</label>
       <label class="checkbox-inline"><input type="checkbox" value="">B</label>
	   <label class="checkbox-inline"><input type="checkbox" value="">-B</label>
       <label class="checkbox-inline"><input type="checkbox" value="">O</label>
       <label class="checkbox-inline"><input type="checkbox" value="">-O</label>
	   <label class="checkbox-inline"><input type="checkbox" value="">AB</label>
       <label class="checkbox-inline"><input type="checkbox" value="">-AB</label>
     </div>
	 <div class="form-group" align="center">
       <label for="amt">Amount of blood donated(ml) :</label>
       <input type="text" class="form-control" style="width:500px; id="amt">
     </div>
     <div class="form-group" align="center">
       <label for="addr">Address of Donar :</label>
       <input type="text" class="form-control" style="width:500px; id="addr">
     </div>
	 <div class="form-group" align="center">
       <label for="cont">Contact NO:</label>
       <input type="text" class="form-control" style="width:500px; id="cont">
     </div>
	 
     <button type="submit" class="btn btn-default">Submit</button>
    </form>
	</div>
	</body>
	</html>