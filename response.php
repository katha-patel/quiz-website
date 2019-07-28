<?php
session_start();
date_default_timezone_set("Asia/kolkata");
$a=$_SESSION['timein'];
$b=$_SESSION['timeout'];

$diff=strtotime($b)-strtotime($a);
$duration= gmdate("H:i:s",$diff);
echo $duration;
?>
