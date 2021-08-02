<?php 
//Types of arrray
//1.Indexed Array

//$a = array(23,45,56,23,90,40,40);
// echo "<pre>";
// print_r($a);
 //echo $a[4];
 //var_dump($a);


 //$b = array("Rupa","Rai","vadodara","21");
  
 //print_r($b);
 //echo "my name is ".$b[0]." my surname is ".$b[1]." I live in ".$b[2]." My age is ".$b[3];
 //echo "<br>";
 //echo "<br>";

// 2.Accociative Array

 //$detailsofstudent = array("Name" => "Rupa" , "surname" => "Rai" ,"Age" => "21" ,"percentage" => "70");

 //print_r($detailsofstudent);
 //echo $detailsofstudent["Name"];
 //echo "<br>";
 //echo $detailsofstudent["surname"];
 //echo "<br>";
 //echo $detailsofstudent["Age"];
 //echo "<br>";

 // 3. Multidimensional Array

 //$multi = array(array(array(array("name"=>"Rupa"),array())));

 //print_r($multi);
 //echo "<br>";
 //echo $multi[0][0][0]['name'];
 //echo "<br>";

 //$multi1 = array("listofname" => array("name"=>"Rupa"));

// print_r($multi1['listofname']['name']);



 $listOfCollege = array(
  array( "cllge_name" => "NeoTech",
  	     "estd" => "2013",
  	     "branch" => "20",
  	     "blocks" => 40
        ),
  array("cllge_name" => "NeoTech",
  	     "estd" => "2013",
  	     "branch" => "20",
  	     "blocks" => 40
  	    ),
  array("cllge_name" => "NeoTech",
  	     "estd" => "2013",
  	     "branch" => "20",
  	     "blocks" => 40 
  	    ),
  array("cllge_name" => "NeoTech",
  	     "estd" => "2013",
  	     "branch" => "20",
  	     "blocks" => 40
  	    ),
  array("cllge_name" => "NeoTech",
  	     "estd" => "2013",
  	     "branch" => "20",
  	     "blocks" => 40
  	 )
)
 
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
    <!--	<?php 
    	for ($i=0; $i <count($listOfCollege) ; $i++) { 
    		
    			?>
    	
    	<tr>
    		<td><?php echo ($i+1); ?></td>
    		<td><?php echo $listOfCollege[$i]['cllge_name']; ?></td>
    		<td><?php echo $listOfCollege[$i]['estd']; ?></td>
    		<td><?php echo $listOfCollege[$i]['branch']; ?></td>
    		<td><?php echo $listOfCollege[$i]['blocks']; ?></td>
    	</tr>
    	<?php
        }
      ?>-->
      <?php
       foreach ($listOfCollege as $key => $value) {
        

       ?>
       <td><?php echo ++$key; ?></td>
    		<td><?php echo $value['cllge_name']; ?></td>
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
