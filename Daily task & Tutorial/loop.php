<?php 

// 3 do while loop

1. Sum of digits // 123 = 1+ 2 + 3 = 6
2. Reverse The Number //456 // 654 
3. Count the digits // 5465 // 4
 



$array = array(10,24,34,45,55);


//echo sizeof($array);
// echo "<pre>";
// print_r($array);

// die;


for ($i=0; $i < sizeof($array); $i++) { 
	echo $array[$i];

	echo "<br>";
}

foreach ($array as $key => $value) {
	
	echo $key . " - value is " .$value ;

	echo "<br>";
}

// $i = 1;
// do {
// 	echo $i; // 1

// 	 $i++;
// } while($i<=10);

// die;

//2 While loop
// $sum = 0;
// $i = 1;
// while ($i<=10) {

// 	$sum = $sum + $i;

// 	$i++;
// }

// echo $sum;

// die;
//factorial;

// $sum = 0;

// for($i = 1; $i<=10; $i++) {

// 	$sum = $sum + $i; // 0 + 1 // 1 // 1 + 2 // 3

// 	echo "<br>";
// 	echo $sum;
// }



// die;

//1 + 2 +3 ------ 10 = 55


// for ($i=1; $i <=10 ; $i++) { 
// 	if($i%2!=0) {
// 		echo "<h1 style='color:red;'>".$i."</h1>";
// 	} else {
// 		echo "<h1 style='color:blue;'>".$i."</h1>";
// 	}
// 	echo "<br>";
// }




// echo $c = 10;

// echo "<br>";

// echo ++$c; // 

// echo "<br>";

// echo $c++; // 

// echo "<br>";

// echo $c;


// die;

// echo $a = 10; // 10 // 10
	
// 	echo "<br>";
// echo $b = 	$a + 1; // 11 // 11
	
// 		echo "<br>";

// echo $a; //111 // 11 //  11 // 11 / 11 // 10 // 10  //10


// Pre Increment

// Post Increment



// 1

// 10

// start No = 1

// end No = 10
	
// In computer programming, a loop is a sequence of instruction s that is continually repeated until a certain condition is reached. Typically, a certain process is done, such as getting an item of data and changing it, and then some condition is checked such as whether a counter has reached a prescribed number.


// Type of loop 

// 1. For Loop 
// 2. While Loop 
// 3. do while  loop 
// 4. ForEach Loop 


// For Loop

// for ($i = 1; $i<=10; $i++) { 
		
// 	echo $i;

// 	echo "<br>";

// }


// for ($i=10; $i >= 1; $i--) { 
	
// 	echo $i;

// 	echo "<br>";
// }





// while ( ) {
// 	# code...
// }

// do {

// } while()


// foreach ($) {
// 	# code...
// }
//die;

// if (isset($_POST['submit'])) {
	
// 	$number = $_POST['number'];
// 	for ($i=1; $i <= 10; $i++) { 

// 		echo $number . " * " . $i. " = " . $number * $i;  
	
// 		echo "<br>";

// 	}

// }

if (isset($_POST['submit'])) {
	
	$number = $_POST['number'];

	if ($number>=0) {
		
		if($number==0) {
			echo "Factorial of ".$number. " id 1";
		} else {

			$fact = 1;

			for($i= $number; $i>=1; $i--) {

				$fact = $fact * $i; // 1 * 5 //5 
			}

			echo "Factorial of ".$number. " id ".$fact;
		}

	} else {
		echo "Not a valid Number";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		
		<label>Enter The Number </label>
		<input type="text" name="number">
		<input type="submit" name="submit" value="Factorial">

	</form>

</body>
</html>
for($number = 1; $number <=100; $number++)
            {
             $count = 0;

           for ( $i = 2; $i <= $number/2; $i++ )
            {
              if($number%$i == 0 )
            {
              $count++;
              break;
            }
            }
            if( $count == 0 && $number != 1 )
            {
      echo $number. "   ";
        }
      }