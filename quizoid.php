<?php
$con = mysqli_connect('localhost','root','','quiz');
if(isset($_POST['submit']))/* $_POST to fetch in php*/
{
  $question= $_POST['question'];
	$option1= $_POST['option1'];
	$option2= $_POST['option2'];
	$option3= $_POST['option3'];
  $option4=$_POST['option4'];
  $answer=$_POST['answer'];
$query="INSERT INTO `quizoid`(`question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
$run=mysqli_query($con , $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quizoid</title>
  <link rel="stylesheet" href="quizoid.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="opbox1">
<center>
  <center>
       <h1>LET'S START THE QUIZ</h1>
  </center>
     <form action="" method="post" name="login">
       <center>
         <h2>Question</h2>
      </center>
      <center>

         <input type="text" name="question" placeholder="question">
      </center>
         <br>
      <center>
       <input type="text" name="option1"  placeholder="option1">
       <br>
       <input type="text" name="option2"  placeholder="option2">
       <br>
       <input type="text" name="option3"  placeholder="option3">
       <br>
       <input type="text" name="option4"  placeholder="option4">
       <br>
   </center>
         <p>Answer</p>
         <input type="text" name="answer"  placeholder="answer">
         <br>
      <input type="submit" name="submit" value="submit">
  </form>
  <form action="displayquiz.php" method="post" name="See The Quiz">
<input type="submit" name="submit" value="See The Quiz">
</form>
</center>
</div>
 </body>
</html>
