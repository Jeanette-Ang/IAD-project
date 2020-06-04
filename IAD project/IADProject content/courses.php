<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css" />
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
	$course_list[] = array('courseid' => $rows['courseNo'],
						  'coursename' => $rows['courseName'],
						  'price' => $rows['price'],
						  'description' => $rows['description'],
						  'duration' => $rows['duration'],
						  'availseats' => $rows['availSeats']);
}
?>
<body>
<header class="mainHeader">
<h1>Innovate Training</h1>
<nav> <ul>
	<li><a href="index.html"> Homepage </a> </li>
	<li><a href="courses.php"> Courses </a> </li>
	<li><a href="register.php"> Register </a> </li>
	<li><a href="admin.html"> Admin Page</a> </li>
	</ul> </nav>
</header>
<div>
	<h2>Course List</h2>
	<table>
		<tr>
			<th>Course Name</th>
			<th>Price ($)</th>
			<th>Description</th>
			<th>Course Duration (Days)</th>
			<th>Avaliable Seats</th>
		</tr>
		<tbody>
			<?php foreach($course_list as $courses) : ?>
			<td><?php echo $courses["coursename"] ?></td>
			<td><?php echo $courses["price"] ?></td>
			<td><?php echo $courses["description"] ?></td>
			<td><?php echo $courses["duration"] ?></td>
			<td><?php echo $courses["availseats"] ?></td>
		</tbody>
		<?php endforeach; ?>
	</table>
</div>
</body>
</html>