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
  <style>
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
   <body>
  <button type="button" class="btn btn-default" style="position:relative;left:180px;top:100px;width:200px;border: 3px solid #0099cc;" ><font color="blue">VIEW INFO</font></button>
  <button type="button" class="btn btn-default" style="position:relative;left:380px;top:100px;width:200px;border: 3px solid #0099cc;"><font color="blue">UPDATE INFO</font></button>
  <button type="button" class="btn btn-default" style="position:relative;left:580px;top:100px;width:200px;border: 3px solid #0099cc;"><font color="blue">CREAT EVENT</font></button>
  </body>
  </html>
  <?php
  ?>	
	