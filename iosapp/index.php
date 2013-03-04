
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap1.css" rel="stylesheet">
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <style type="text/css">
      body {
     
        background-color: #f5f5f5;
		background-image:url(images/apps.jpg);
		background-size:cover;
      }
	  </style>
  <title>iOS apps | Distribute apps</title>
  </head>

   <body>
<center><img src='images/ios.png' height='70' width='100px' style='margin-bottom:-80px;'></center>
<div class="container">
<form class="form-signin" name="myform" method="post" action="background.php" autocomplete="on">
<?php
if(isset($_GET['s']))
{
 echo "<b><span style='color:red;'><center>Check Email &amp; password !</center></span></b>";
}
?>
    <h2 class="form-signin-heading" align="center">Login</h2>
    
    


        <input type="text" class="input-block-level" name="email" placeholder="Email" required>
        <input type="password" class="input-block-level" name="pwd" placeholder="Password" required>
        <center><button class="btn btn-primary" type="submit">Submit</button></center>
        
        


</form>
      

</div>   
<script src="js/index.js"></script>
<script src="js/bootstrap-fileupload.js"></script>



</body>
</html>

