<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Untitled Document</title>
</head>

<?php
include 'database.php';

$sql = "SELECT * FROM tblcourses";
	
$result = mysqli_query($con, $sql);
	
if (!$result) {
	echo mysqli_error($con);
	exit();
}
	
while ($rows = mysqli_fetch_array($result)) {
	$course_list[] = array('courseNo' => $rows['courseNo'],
						  'courseName' => $rows['courseName'],
						  'price' => $rows['price'],
						  'description' => $rows['description'],
						  'duration' => $rows['duration'],
						  'availSeats' => $rows['availSeats']);
}
?>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>$</th>
			<th>Description</th>
			<th>Hours</th>
			<th>Available seats</th>
		</tr>
		<tbody>
			<?php foreach ($course_list as $courses) :?>
			<td><?php echo $courses["courseNo"] ?></td>
			<td><?php echo $courses["courseName"] ?></td>
			<td><?php echo $courses["price"] ?></td>
			<td><?php echo $courses["description"] ?></td>
			<td><?php echo $courses["duration"] ?></td>
			<td><?php echo $courses["availSeats"] ?></td>
			<td>
				<form method="post" action="index2.php">
					<input type="hidden" name="ci" value="<?php echo $courses["courseNo"] ?>">
					<input type="hidden" name="action" value="edit">
					<input type="submit" value="Edit">
				</form>
			</td>
			<td>
				<form method="post" action="delete2.php">
					<input type="hidden" name="ci" value="<?php echo $courses["courseNo"] ?>">
					<input type="hidden" name="action" value="delete">
					<input type="submit" value="Delete">
				</form>
			</td>
			</tbody>
		<?php endforeach; ?>
		</table>
	<form method="post" action="update2.php">
					<input type="submit" value="Add">
				</form>