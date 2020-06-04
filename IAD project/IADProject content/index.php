
<?php
$con = mysqli_connect('localhost', 'root', '', 'dbcourses');

$gresult = '';

if(isset($_POST['action_type'])) {
	if ($_POST['action_type'] == 'add' or $_POST['action_type'] == 'edit') {
		$regid = mysqli_real_escape_string($con, strip_tags($_POST['regid']));
		$regname = mysqli_real_escape_string($con, strip_tags($_POST['regname']));
		$course = mysqli_real_escape_string($con, strip_tags($_POST['course']));
		$email = mysqli_real_escape_string($con, strip_tags($_POST['email']));
		$phone = mysqli_real_escape_string($con, strip_tags($_POST['phone']));
		$date = mysqli_real_escape_string($con, strip_tags($_POST['date']));
		
		if ($_POST['action_type'] == 'add') {
			$sql = "INSERT INTO tblregistrants SET
			regname = '$regname',
			course = '$course',
			email = '$email',
			phone = '$phone',
			date = '$date'";
		} else {
			$sql = "UPDATE tblregistrants SET
			regname = '$regname',
			course = '$course',
			email = '$email',
			phone = '$phone',
			date = '$date'
			WHERE regid = $regid";
		}
		if(mysqli_query($con, $sql)) {
			echo "Registration complete";
		}
		
	}
}

if(isset($_POST['action']) and $_POST['action'] == 'edit') {
	$id = (isset($_POST["ci"]) ? $_POST["ci"] : '');
	$sql = "SELECT regid, regname, course, email, phone, date FROM tblregistrants WHERE regid = $id";
	$result = mysqli_query($con, $sql);
	
	$gresult = mysqli_fetch_array($result);
	
	include 'register.php';

}
?>