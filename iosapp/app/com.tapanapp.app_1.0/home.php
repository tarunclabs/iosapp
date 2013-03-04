<?php
	              session_start();
				  if($_SESSION["authenticated"])
	              {
	 			?>
<html>
<head>
<link href="bootstrap.css" rel="stylesheet">
<link href="bootstrap1.css" rel="stylesheet">
</head>

<body style="margin-top:200px">

<div class="container" align="center">

     <h2 class="form-signin-heading" align="center">Welcome!</h2>
     <br><a href="itms-services://?action=download-manifest&url=http://107.21.224.44/tarun/clicklabs/app/com.tapanapp.app_1.0/myApp.plist">
      <center><button button="submit">Click to install TapanApp</button></center></a><br><br>
      <a href="../../logout.php"><button class="btn btn-primary type="button"">Logout</button></a>
   
      </div>
      
 </body>
 </html>
 <?php
 } 
 else
 {
	 header("location: ../../logout.php");
 }
 ?>