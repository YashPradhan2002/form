<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Form</title>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="name" placeholder="Name">
			<br>
			<input type="text" name="degree" placeholder="Degree">
			<br>
			<input type="number" name="mobile" placeholder="Mobile">
			<br>
			<input type="email" name="email" placeholder="E-Mail">
			<br>
			<input type="text" name="refer" placeholder="Referred By">
			<br>
			<input type="text" name="post" placeholder="Post">
			<br>
			<input type="color" name="color">
			<br>
			<input type="submit" name="submit">
		</form>
	</body>
</html>
<?php
	include 'connect.php';
	include 'send.php';
?>