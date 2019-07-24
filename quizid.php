<?php
$con = mysqli_connect('localhost','root','','quiz');
$query="SELECT * FROM `info` WHERE 1 ";
$run=mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>question bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="quizid.css">
</head>
<body>
	<table>
		<th>Quiz ID</th>
		<th></th>
		<th> Title</th>
  <?php
  while($row=mysqli_fetch_assoc($run))
  {
  ?>
<tr>
	<form action="displayquiz.php" method="post" name="$quizid">

	<td><input type="submit" name="Login" value="<?php echo $row['id'];?>"></td>
	<td></td>
	<td><?php echo $row['title'];?></td>
</form>
</tr>
    <?php
 }
?>
</table>
<form action="information.php" method="post" name="Add Quiz">
<input type="submit" name="Login" value="Add Quiz">
</form>


  </body>
  </html>
