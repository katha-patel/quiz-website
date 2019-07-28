<?php
session_start();
$con = mysqli_connect('localhost','root','','quiz');
$query1="SELECT * FROM `info` WHERE `id`=114";
$run1=mysqli_query($con, $query1);
$row1=mysqli_fetch_assoc($run1);
$timein=$row1['timein'];
$timeout=$row1['timeout'];
$_SESSION['timein']=$timein;
$_SESSION['timeout']=$timeout;
date_default_timezone_set("Asia/kolkata");
$diff=strtotime($timeout)-strtotime($timein);
$_SESSION['$diff']=$diff;
?>
<script type="text/javascript">
window.location"in.php";
</script>
