<?php
if (isset($_POST['submit'])) {
$host ="localhost";
$user = "root";
$pass = "";
$db = "phpfirst";
$table = "registrations";
$con = mysqli_connect($host, $user, $pass, $db);
if ($con) {
?>
<script type="text/javascript">
	window.alert("Connection Successful")
</script>
<?php
}
else{
?>
<script type="text/javascript">
window.alert("Server Error!")
</script>
<?php
}
}
?>