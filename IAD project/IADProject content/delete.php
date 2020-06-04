<?php
$con = mysqli_connect('localhost', 'root', '', 'dbcourses');

if (isset($_POST["action"]) and $_POST["action"] == "delete") {
	$id = (isset($_POST["ci"]) ? $_POST["ci"] : '');
	$sql = "DELETE FROM  tblregistrants WHERE regid = $id";
	$result = mysqli_query($con, $sql);
}
?>