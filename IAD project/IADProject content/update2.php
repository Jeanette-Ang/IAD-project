<link href="style.css" rel="stylesheet" type="text/css">
<body>
	<h2>Update Courses</h2>
	<form method="post" action="index2.php">
		<input type="hidden" name="courseNo" value="<?php echo (isset($gresult) ? $gresult["courseNo"]: ''); ?>" 
		<table>
		<tr>
			<td><label for="courseName">Course Name:</label></td>
			<td><input type="text" name="courseName" value="<?php echo (isset($gresult) ? $gresult["courseName"]: '');?>" id="courseName" required></td>
		</tr>
		<br>
		<tr>
			<td><label for="price">Price: </label></td>
			<td><input type="text" name="price" value="<?php echo (isset($gresult) ? $gresult["price"]: '');?>" id="price" required></td>
		</tr>
		<br>
		<tr>
			<td><label for="description">Description: </label></td>
			<td><input type="text" name="description" value="<?php echo (isset($gresult) ? $gresult["description"]: '');?>" id="description" required></td>
		</tr>
		<br>
		<tr>
			<td><label for="duration">Duration: </label></td>
			<td><input type="text" name="duration" value="<?php echo (isset($gresult) ? $gresult["duration"]: '');?>" id="duration" required></td>
		</tr>
		<br>
		<tr>
			<td><label for="availSeats">Available Seats: </label></td>
			<td><input type="text" name="availSeats" value="<?php echo (isset($gresult) ? $gresult["availSeats"]: '');?>" id="availSeats" required></td>
		</tr>
		</table>
	<input type="hidden" name="action_type" value="<?php echo (isset($gresult) ? 'edit' : 'add'); ?>">
	<input type="submit" name="save" id="save" value="Save">
	</form>
	<form method="post" action="index2.php">
		<input type="hidden" name="action_type" value="<?php echo $gresult=''; ?>">
		<input type="submit" name="save" id="cancel" value="Cancel">
	</form>
</body>