<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Admin</title>
</head>

<?php
include 'database.php';

$sql = "SELECT * FROM tblregistrants";
	
$result = mysqli_query($con, $sql);
	
if (!$result) {
	echo mysqli_error($con);
	exit();
}
	
while ($rows = mysqli_fetch_array($result)) {
	$student_list[] = array('regid' => $rows['regid'],
						  'regname' => $rows['regname'],
						  'course' => $rows['course'],
						  'email' => $rows['email'],
						  'phone' => $rows['phone'],
						  'date' => $rows['date']);
}
?>
<body>
	<table>
		<tr>
			<th>ID No.</th>
			<th>Name</th>
			<th>Course</th>
			<th>Email</th>
			<th>Phone No.</th>
			<th>Date of reg.</th>
		</tr>
		<tbody>
			<?php foreach ($student_list as $register) :?>
			<td><?php echo $register["regid"] ?></td>
			<td><?php echo $register["regname"] ?></td>
			<td><?php echo $register["course"] ?></td>
			<td><?php echo $register["email"] ?></td>
			<td><?php echo $register["phone"] ?></td>
			<td><?php echo $register["date"] ?></td>
			<td>
				<form method="post" action="index.php">
					<input type="hidden" name="ci" value="<?php echo $register["regid"] ?>">
					<input type="hidden" name="action" value="edit">
					<input type="submit" value="Edit">
				</form>
			</td>
			<td>
				<form method="post" action="delete.php">
					<input type="hidden" name="ci" value="<?php echo $register["regid"] ?>">
					<input type="hidden" name="action" value="delete">
					<input type="submit" value="Delete">
				</form>
			</td>
		</tbody>
		<?php endforeach; ?>
	</table>
	<form method="post" action="update.php">
					<input type="submit" value="Add">
				</form>
		</body>
