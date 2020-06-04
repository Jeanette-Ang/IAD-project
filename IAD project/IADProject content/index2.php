<?php
$con = mysqli_connect('localhost', 'root', '', 'dbcourses');

$gresult = '';

if(isset($_POST['action_type'])) {
	if ($_POST['action_type'] == 'add' or $_POST['action_type'] == 'edit') {
		$courseNo = mysqli_real_escape_string($con, strip_tags($_POST['courseNo']));
		$courseName = mysqli_real_escape_string($con, strip_tags($_POST['courseName']));
		$price = mysqli_real_escape_string($con, strip_tags($_POST['price']));
		$description = mysqli_real_escape_string($con, strip_tags($_POST['description']));
		$duration = mysqli_real_escape_string($con, strip_tags($_POST['duration']));
		$availSeats = mysqli_real_escape_string($con, strip_tags($_POST['availSeats']));
		
		if ($_POST['action_type'] == 'add') {
			$sql = "INSERT INTO tblcourses SET
			courseNo = '$courseNo',
			courseName = '$courseName',
			price = '$price',
			description = '$description',
			duration = '$duration',
			availSeats = '$availSeats'";
		} else {
			$sql = "UPDATE tblcourses SET
			courseNo = '$courseNo',
			courseName = '$courseName',
			price = '$price',
			description = '$description',
			duration = '$duration',
			availSeats = '$availSeats'
			WHERE courseNo = '$courseNo'";
		}
		if(mysqli_query($con, $sql)) {
			echo "Registration complete";
		}
		
	}
}

if(isset($_POST['action']) and $_POST['action'] == 'edit') {
	$id = (isset($_POST["ci"]) ? $_POST["ci"] : '');
	$sql = "SELECT courseNo, courseName, price, description, duration, availSeats FROM tblcourses WHERE courseNo = $id";
	$result = mysqli_query($con, $sql);
	
	$gresult = mysqli_fetch_array($result);
	
	include 'registercourses.php';

}
?>