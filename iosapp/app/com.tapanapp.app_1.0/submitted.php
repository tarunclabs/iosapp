<?php
	              session_start();
				  if($_SESSION["authenticated"])
	              {
	 			?>
	 <html>

 <head>
 <link href="bootstrap.css" rel="stylesheet">
 </head>

<body style="margin-top:300px">
	<div align="center">
	
     Click on the link to install the app<br><br>
    <a href="home.php" style="text-decoration:none;">http://www.distributeapps.com/app/com.tapanapp.app_1.0/home.php</a><br><br>
    <a href="../../logout.php"><button class="btn btn-primary" type="button">Logout</button></a>
    
    </div>



</body>
</html><?php
 } 
 else
 {
	 header("location: ../../logout.php");
 }
 ?>