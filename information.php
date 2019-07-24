<?php
if(isset($_POST['submit']))
{
  $title=  $_POST['title'];
	$name= $_POST['name'];
  $timein=  $_POST['timein'];
  $timeout=  $_POST['timeout'];
  $discription=  $_POST['discription'];
  $con=mysqli_connect('localhost','root','','quiz');
  $query="INSERT INTO `info`(`title`, `name`, `timein`, `timeout`, `discription`) VALUES ('$title','$name','$timein','$timeout','$discription')";
  $run=mysqli_query($con,$query);

}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>information</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="information.css">
</head>
<body>
  <div class="info">
		<center>
     <h1></h1>
     <form action="" method="post" name="submit">
         <input type="text" name="title" placeholder="title of quiz">
         <br>
         <input type="text" name="name" placeholder="name of admin">
         <br>
         <div class="a">
         <label for="time in">Quiz starts at:</lable>
         <input type="time" name="timein">
       </div>
         <br>
         <div class="a">
         <label for="time out">Quiz ends at:</lable>
         <input type="time" name="timeout">
       </div>
         <br>
         <input type="text" name="discription" placeholder="discription">
         <br>

           <form action="" method="post" name="submit">
         <input type="submit" name="submit" value="submit">
       </form>
     </form>
       <form action="quizoid.php" method="post" name="Way To Set Questions">
       <input type="submit" name="Login" value="Way To Set Questions">
       </form>

	</center>


  </div>
</body>
</html>
