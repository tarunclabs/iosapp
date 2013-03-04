<?php
include("conn.php");
session_start();

$email=mysql_real_escape_string($_POST['email']);
$pwd=mysql_real_escape_string(sha1($_POST['pwd']));

$result = mysql_query("SELECT * FROM applogin WHERE Email='$email' && Password='$pwd' LIMIT 1");
$ch=mysql_num_rows($result);
echo $ch;
if($ch)
{
$_SESSION['admin']="1";
header("location:app.php");
}
else
{
header("location:index.php?s=1");
}

?>
