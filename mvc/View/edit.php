<?php 

// echo "<pre>";

// print_r($result);
	
	
?>
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
		<form method="post" action="update">
			<label>Class</label>
			<input type="text" name="class" value="<?php echo $result->class; ?>">
			<br><br>
			<label>Course</label>
			<input type="text" name="course" value="<?php echo $result->name; ?>">
			<br><br>
			<input type="hidden" name="cid" value="<?php echo $result->id; ?>">
			<input type="submit" name="submit">
		</form>
	</div>
	

</body>
</html>