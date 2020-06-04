<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css" />
<title>index</title>
</head>

<body>
	<h2>Update</h2>
	<form method="post" action="index.php">
		<input type="hidden" name="regid" value="<?php echo (isset($gresult) ? $gresult["regid"]: ''); ?>" 
		<table>
		<tr>
			<td><label for="regname">Name: </label></td>
			<td><input type="text" name="regname" value="<?php echo (isset($gresult) ? $gresult["regname"]: '');?>" id="regname" required></td>
		</tr>
		<br>
		<tr>
			<td><label for="course">Course applied for: </label></td>
			<td><input type="text" name="course" value="<?php echo (isset($gresult) ? $gresult["course"]: '');?>" id="course" required></td>
		</tr>
		<br>
		<tr>
			<td><label for="email">Email: </label></td>
			<td><input type="text" name="email" value="<?php echo (isset($gresult) ? $gresult["email"]: '');?>" id="email" required></td>
		</tr>
		<br>
		<tr>
			<td><label for="phone">Phone #: </label></td>
			<td><input type="text" name="phone" value="<?php echo (isset($gresult) ? $gresult["phone"]: '');?>" id="phone" required></td>
		</tr>
		<br>
		<tr>
			<td><label for="date">Registration Date: </label></td>
			<td><input type="text" name="date" value="<?php echo (isset($gresult) ? $gresult["date"]: '');?>" id="date" required></td>
		</tr>
		</table>
	<input type="hidden" name="action_type" value="<?php echo (isset($gresult) ? 'edit' : 'add'); ?>">
	<input type="submit" name="add" id="add" value="Add">
	<br>

	<form method="post" action="index.php">
		<input type="hidden" name="action_type" value="<?php echo $gresult=''; ?>">
		<input type="submit" name="save" id="cancel" value="Cancel">
	</form>

</body>