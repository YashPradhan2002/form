<?php
// include 'connect.php';
$host ="localhost";
$user = "root";
$pass = "";
$db = "phpfirst";
$table = "registrations";
$con = mysqli_connect($host, $user, $pass, $db);
$selectquery = "select * from registrations";
$query = mysqli_query($con, $selectquery);
// $rows = mysqli_num_rows($query);
// echo $rows;
while($data = mysqli_fetch_array($query)){
	echo $data['name'] . "<br>";
	echo $data['degree'] . "<br>";
	echo $data['mobile'] . "<br>";
	echo $data['email'] . "<br>";
	echo $data['refer'] . "<br>";
	echo $data['post'] . "<br>";
	echo $data['color'] . "<br>";
	echo "<br>";
}
?>