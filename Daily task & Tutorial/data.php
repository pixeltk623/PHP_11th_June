<?php 

	$name = "Sharvan";

?>

<h1><?php echo $name; ?></h1>

<h1>
	<?php 

		if (isset($name)) {
			echo $name;
		}

	?>
</h1>

<?php 
	
	if (isset($name)) {
		echo "<h1>".$name."</h1>";
	}

?>

<?php 
	
	if (isset($name)) {
		?>
		<h1><?php echo $name; ?></h1>
		<?php
	}

?>
   