<?php
	// echo "<pre>";

	// print_r($_SESSION);

// echo "<pre>";

// print_r(count($result));


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

	<div class="container">
	<h1>Show Data</h1>
	<?php 
		if (isset($_SESSION['dataResult'])) {
	?>
		<div class="alert <?php echo $_SESSION['dataResult']['class']; ?>">
			<?php echo $_SESSION['dataResult']['message']; ?>
		</div>
	<?php
		unset($_SESSION['dataResult']);
		}
	?>
	

	<a href="add_course">Add Course</a>
	<br><br>
	<table class="table table-bordered">
		<tr>
			<th>Sl.No</th>
			<th>Class</th>
			<th>Name</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>

		<?php 

			if(count($result)==0) {
				?>
				<tr>
					<th colspan="5" class="text-center text-danger">No Record Found</th>
				</tr>
				<?php
			} else {

			foreach ($result as $key => $value) {
			?>
			<tr>
				<td><?php echo ++$key; ?></td>
				<td><?php echo $value->class; ?></td>
				<td><?php echo $value->name; ?></td>
				<td><?php echo $value->created_at; ?></td>
				<td>
					<a href="">Show</a>
					<a href="edit?id=<?php echo $value->id; ?>">Edit</a>
					<a href="delete?id=<?php echo $value->id; ?>">Delete</a>
				</td>
			</tr>
			<?php
			}
		}
		?>
	</table>
	</div>
</body>
</html>