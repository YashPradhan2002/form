<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$degree = $_POST['degree'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$refer = $_POST['refer'];
$post = $_POST['post'];
$color = $_POST['color'];
$query = "insert into registrations(name,degree,mobile,email,refer,post,color)
		values('$name','$degree','$mobile','$email','$refer','$post','$color')" ;
$result = mysqli_query($con, $query);
if ($result) {
?>
<script type="text/javascript">
	window.alert("Form Submitted")
</script>
<?php
}
else{
?>
<script type="text/javascript">
window.alert("Not Submitted! Server Error")
</script>
<?php
}
}
?>