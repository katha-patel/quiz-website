<?php
session_start();
?>
 <div id="response"></div>
 <script type="text/javascript">
   setInterval(function ()
   {
   var xmlhttp =new XMLHttpRequest();
   xmlhttp.open("GET","response.php",false);
   xmlhttp.send();
   document.getElementsById("response").innerHTML.responseText;
   jkhcksjc

 },1000);
 </script>
