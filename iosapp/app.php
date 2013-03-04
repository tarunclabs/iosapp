 <?php
session_start();
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

     <link href="css/bootstrap.css" rel="stylesheet">
       <link href="css/bootstrap1.css" rel="stylesheet">
        <link href="css/bootstrap-fileupload.css" rel="stylesheet">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <style type="text/css">
      body {
     
        background-color: #f5f5f5;
		background-image:url(images/bg.jpg);
		background-size:cover;
      }
	  </style>
  </head>

   <body>

<div class="container">
<center><img src="images/ios.png" height="70" width="100px" style="margin-bottom:-80px;"></center>
<form class="form-signin" name="myform" method="post" action="upload.php" autocomplete="on" enctype="multipart/form-data" onsubmit="return validateForm();">
    <h2 class="form-signin-heading" align="center">Fill up app details</h2>
        <input type="text" class="input-block-level" name="appname" placeholder="App Name">
        <input type="text" class="input-block-level" name="bid" placeholder="Bundle Identifier">
        <input type="text" class="input-block-level" name="bver" placeholder="Bundle Version">
         <div class="fileupload fileupload-new" data-provides="fileupload">
           <div class="input-append">
             <div class="uneditable-input span3"  style="width:130px">
               <i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span>
             </div><span class="btn btn-file"><span class="fileupload-new">Select file</span>
                 <span class="fileupload-exists">Change</span><input type="file" name="file" /></span>
                  <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
            </div>
          </div>
       <a href="logout.php"><button class="btn btn-success" type="button">Logout</button></a>
         <button class="btn btn-primary" type="submit">Submit</button>
        
        
<?php
if(isset($_GET['s']))
{
echo "<center><br><font color='red'>File not uploaded</font></center>";
}

if(isset($_GET['f']))
{
echo "<center><br><font color='red'>Please select a file</font></center>";
}
if(isset($_GET['a']))
{
echo "<center><br><font color='red'>Choose a different version</font></center>";
}
if(isset($_GET['g']))
{
echo "<center><br><font color='red'>Please upload an ipa file</font></center>";
}
?>


</form>
      

</div> 

   
<script src="js/app.js"></script>
<script src="css/bootstrap.js"></script>
<script src="css/bootstrap.min.js"></script>
<script src="js/bootstrap-fileupload.js"></script>

</body>
</html>
<?php
}
else
{
header("location:index.php");
}
?>
