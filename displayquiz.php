<?php
session_start();
$con = mysqli_connect('localhost','root','','quiz');
$query="SELECT * FROM `quizoid` WHERE 1";
$run=mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>question bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <center>
    <h2> Programming Test</h2>
  </center>
  <ol>
    <?php
    while($row=mysqli_fetch_assoc($run))
    {

      ?>
        <li><?php echo $row['question'];?></li>

        <input type="radio" name="option" value="option1"><?php echo $row['option1'];?>
        <br>
        <input type="radio" name="option" value="option2"><?php echo $row['option2'];?>
        <br>
        <input type="radio" name="option" value="option3"><?php echo $row['option3'];?>
        <br>
        <input type="radio" name="option" value="option4"><?php echo $row['option4'];?>
        <br>
        <?php

	}
    ?>
  </ol>
  <!--<button onclick="returnScore()">View Results</button>-->
    </body>
    </html>
