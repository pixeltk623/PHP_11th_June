<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Add Course</h1>
		<?php 
			if (isset($message)) {
				?>
				<div class="alert <?php echo $message['class'] ?>">
					<?php echo $message['message']; ?>
				</div>
				<?php
			}
		?>
		<form method="post">
			<label>Class</label>
			<input type="text" name="class">
			<br><br>
			<label>Course</label>
			<input type="text" name="course">
			<br><br>
			<input type="submit" name="submit">
		</form>
		<br><br>
		<a href="http://localhost/PHP_11th_June/mvc/" class="btn btn-warning">Back To Home</a>
	</div>
	

</body>
</html>