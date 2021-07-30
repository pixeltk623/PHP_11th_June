<?php 

$a = array(45,78,78,78,78,22,45);

$b = array("Nirali","Baroda",20,87.55,true);

echo "<pre>";
var_dump($b);

echo "My Name is ".$b[0]. " and I am from ".$b[1];
echo "<pre>";
print_r($b);

//echo $a;

//echo $a[5];


//print_r($a);

// Types of array

// 1. Indexed Array  => array(45,78,78,78,78,22,45);
// 2. Associative array 
// 3. Multidumensonal Array

// Associative array 

	// $detailsOfStudent = array("name" => "Sharvan Kumar", "Place" => "Bihar" ,"Education" => "10th Fail");

	// echo $detailsOfStudent["Education"];

	// echo "<br>";
	// echo $detailsOfStudent["name"];
	// print_r($detailsOfStudent);

	// echo "<h1>".$detailsOfStudent['name']."</h1>";

	
	//$multi = array(array(array(array(array("name" => "Rupa")))), array(array()),array());

	//print_r($multi);

	// echo $multi[0][0][0][0]['name'];


	// $multiArray = array("listOfName" => array("name" => "Kumar"));
	// $multiArray1 = array(
	// 	array("name"=>array("name"=>"kumar"),
	// 		array(47)
	// 	)
	// );

	// print_r($multiArray1[0][0][0]);
	// echo "<pre>";

	// print_r($multiArray['listOfName']['name']);

	// echo "<br>";
	// print_r($multiArray1);

	$listOfCollege = array(
		array(
			"clg_name" => "Parul College",
			"estd" => "1995",
			"branch" => "100",
			"blocks" => 50
		),
		array(
			"clg_name" => "NeoTech",
			"estd" => "1995",
			"branch" => "100",
			"blocks" => 50
		),
		array(
			"clg_name" => "SSG",
			"estd" => "1995",
			"branch" => "100",
			"blocks" => 50
		),
		array(
			"clg_name" => "CU Rajkot",
			"estd" => "1995",
			"branch" => "100",
			"blocks" => 50
		),
		array(
			"clg_name" => "GIET Gunupur",
			"estd" => "1997",
			"branch" => "100",
			"blocks" => 50
		)
	);


	// foreach ($listOfCollege as $key => $valueOfName) {
	// 	echo $key;
	// 	echo $valueOfName['clg_name'];
	// }

	// foreach ($listOfCollege as $valueOfName) {
	// 	echo $valueOfName['clg_name'];
	// }

	 


	// for ($i=0; $i < count($listOfCollege); $i++) { 
		
	// 	echo $listOfCollege[$i]['clg_name'];
	// 	echo "<br>";

	// }

	// echo sizeof($listOfCollege);

	// echo count($listOfCollege);

	//echo "<pre>";
	//echo $listOfCollege;

	// print_r($listOfCollege[0]['clg_name']);
	// print_r($listOfCollege[1]['clg_name']);
	// print_r($listOfCollege[2]['clg_name']);
	// print_r($listOfCollege[3]['clg_name']);

	// for loop 

	// foreach loop
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>College Name</th>
        <th>ESTD</th>
        <th>Branch</th>
        <th>Blocks</th>
      </tr>
    </thead>
    <tbody>
    	<!--
    	<?php 
    		for ($i=0; $i < count($listOfCollege); $i++) { 
    	?>
    		<tr>
    			<td><?php echo ($i+1); ?></td>
    			<td><?php echo $listOfCollege[$i]['clg_name'] ?></td>
    			<td><?php echo $listOfCollege[$i]['estd'] ?></td>
    			<td><?php echo $listOfCollege[$i]['branch'] ?></td>
    			<td><?php echo $listOfCollege[$i]['blocks'] ?></td>
    		</tr>
    	<?php	
    		}
    	?>
    -->
    	<?php 
    		foreach ($listOfCollege as $key => $value) {
    	?>
    	<tr>
    		<td><?php echo ++$key; ?></td>
    		<td><?php echo $value['clg_name']; ?></td>
    		<td><?php echo $value['estd']; ?></td>
    		<td><?php echo $value['branch']; ?></td>
    		<td><?php echo $value['blocks']; ?></td>
    	</tr>
     	<?php
    	    }
    	?>
    </tbody>
  </table>
</div>

</body>
</html>