<?php
$con = mysql_connect("localhost","root","clickpass11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("tarun", $con);