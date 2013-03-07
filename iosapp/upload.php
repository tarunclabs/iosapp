<?php
include("conn.php");
session_start();
if(isset($_SESSION['admin']))
{ 
	$AppName=$_POST['appname'];
	$BundleIdentifier=$_POST['bid'];
	$BundleVersion=$_POST['bver'];
	// to make a random name of app folder
					$date=date('d-m-Y');
					$length=15;
					$str='';
					$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					$size = strlen( $chars );
					for( $i = 0; $i < $length; $i++ ) 
					{
						$str .= $chars[ rand( 0, $size - 1 ) ];
					}
					$random_string=$AppName."-".$str."-".$date;
					// code ends here.
	$t=$random_string;
	
	
	
	
	$dir=mkdir("app/$t/",0777);
	$i=$_FILES["file"]["name"];
	
	
	
	
	
	$j=$_FILES["file"]["type"];

 if($j == "application/octet-stream")
  {
     if(file_exists("app/$t/$i"))
	{
	header("location:app.php?a=1");
	}
	else
	{
	 $i=str_replace(' ','_',$i);
	 $imgname = "app/$t/".$i;
	 copy("css/bootstrap.css", "app/$t/bootstrap.css");
	 copy("css/bootstrap1.css", "app/$t/bootstrap1.css");
		$flag1=0;
	 $content = '
	 <html>

 <head>
 <link href="bootstrap.css" rel="stylesheet">
 </head>

<body style="margin-top:300px">
	<div align="center">
	
     Click on the link to install the app<br><br>
    <a href="home.php" style="text-decoration:none;">http://www.distributeapps.com/app/'.$t.'/home.php</a><br><br>
    <a href="../../logout.php"><button class="btn btn-primary" type="button">Logout</button></a>
    
    </div>



</body>
</html>';

$fp = fopen("app/$t/submitted.php","wb");
fwrite($fp,$content);
fclose($fp);

$fp = fopen("app/$t/home.php","wb");
$content='
<html>
<head>
<link href="bootstrap.css" rel="stylesheet">
<link href="bootstrap1.css" rel="stylesheet">
</head>

<body style="margin-top:200px">

<div class="container" align="center">

     <h2 class="form-signin-heading" align="center">Welcome!</h2>
     <br><a href="itms-services://?action=download-manifest&url=http://107.21.224.44/tarun/iosapp/app/'.$t.'/myApp.plist">
      <center><button button="submit">Click to install '.$AppName.'</button></center></a><br><br>
      <a href="../../logout.php"><button class="btn btn-primary type="button"">Logout</button></a>
   
      </div>
      
 </body>
 </html>';
fwrite($fp,$content);
fclose($fp);



$download = "/tarun/clicklabs/app/$t/".$i;
$ipdownload = "http:/"."/107.21.224.44$download";


$fp = fopen("app/$t/myApp.plist","wb");
$content = '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>items</key>
	<array>
		<dict>
			<key>assets</key>
			<array>
				<dict>
					<key>kind</key>
					<string>software-package</string>
					<key>url</key>
					<string>';
$content2 = "$content"."$ipdownload"."</string>
				</dict>
			</array>
			<key>metadata</key>
			<dict>
				<key>bundle-identifier</key>
				<string>$BundleIdentifier</string>
				<key>bundle-version</key>
				<string>$BundleVersion</string>
				<key>kind</key>
				<string>software</string>
				<key>title</key>
				<string>$AppName</string>
			</dict>
		</dict>
	</array>
</dict>
</plist>";

fwrite($fp,$content2);
fclose($fp);

			$sql="INSERT INTO app_distribution (Time, AppName, BundleIdentifier, BundleVersion )
			VALUES(now(),'$_POST[appname]','$_POST[bid]','$_POST[bver]')";



				if (!mysql_query($sql,$con))
  					{
  						die('Error: ' . mysql_error());
  					}
				else
					{
						if(move_uploaded_file($_FILES['file']['tmp_name'], $imgname))
							{
								$qry=mysql_query("INSERT INTO app_distribution_files values('','$imgname')");
									
									if($qry)
									{
	
										header("location:app/$t/submitted.php");
									}
								else
									{
										echo ("location:app.php?s=1");
									}
	
							}
						else
							{
							header("location:app.php?f=1");
							}
					}
      }
   }
    else
    {	
	header("location:app.php?g=1");
	}
}
else
{
echo "send post variable";
}
?>

