<?php
if (isset($_POST['submit'])) {
$host ="ec2-107-22-122-106.compute-1.amazonaws.com";
$user = "dzlomyfjmtqpeo";
$pass = "2b91c439300cd1e66917df3fd6d7f1fa17ed136f6d77f8eee2dc269ab47e0e52";
$db = "d718v4k9j2i0m8";
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
