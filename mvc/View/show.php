<?php
	


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table tr th,td {
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>Show Data</h1>

	<a href="add_course">Add Course</a>
	<br><br>
	<table border="1" style="border-collapse: collapse; width: 800px;">
		<tr>
			<th>Sl.No</th>
			<th>Class</th>
			<th>Name</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>

		<?php 

			foreach ($result as $key => $value) {
			?>
			<tr>
				<td><?php echo ++$key; ?></td>
				<td><?php echo $value->class; ?></td>
				<td><?php echo $value->name; ?></td>
				<td><?php echo $value->created_at; ?></td>
				<td>
					<a href="">Show</a>
					<a href="">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
			<?php
			}

		?>
	</table>
</body>
</html>