<?php 
  
  $a = array(10,15,20,25,30,40);
  echo "<pre>";
  //print_r($a);

  $b = array("Nirali","Baroda","23","75.02","true");
  echo "<pre>";
  //print_r($b);
  
 echo "My Name is ".$b[0]. " I am from ".$b[1]. " My age is ".$b[2];
  echo "<br>";

 // 2. Associative array 
  
  $detailsOfStudent = array("name" => "Nirali Sharma", "Place" => "Baroda" ,"Education" => "Diploma IT");
  echo "<br>";
  echo $detailsOfStudent["name"];
  echo "<br>";  
  echo $detailsOfStudent["Place"];
  echo "<br>";
  echo $detailsOfStudent["Education"];

  echo "<br>";

  // 3. Multidumensonal Array

  $multi = array(array(array("Name" => "Nirali")), array(array()),array());
  print_r($multi);
  echo $multi[0][0]['Name'];

  $multiArray = array("listOfName" => array("Name" => "Nirali"));
  $multiArray1 = array(
	array("Name"=>array("Name"=>"Nirali"),
		array(50)
	 )
	);

  print_r($multiArray1[0][0]);
	 echo "<pre>";

  print_r($multiArray['listOfName']['Name']);

  echo "<br>";
	 print_r($multiArray1);	

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

  foreach ($listOfCollege as $key => $valueOfName) {
	 	echo $key;
	 	echo $valueOfName['clg_name'];
	 }

	 print_r($listOfCollege[0]['clg_name']);
	 print_r($listOfCollege[1]['clg_name']);
	 print_r($listOfCollege[2]['clg_name']);
	 print_r($listOfCollege[3]['clg_name']);	
	 
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