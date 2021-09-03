<?php

$number = 123;
// $sum = 0;
// for($i = 1; $i<=10; $i++) {

// 	if($i%2==0) {
// 		// echo $i;
// 		// echo "<br>";

// 		$sum = $sum+$i;
// 	}
	
// }


// echo $sum;
$sum = 0;
while($number>0) {
	$rem = $number%10;
	$sum = $sum + $rem; // 0 +3 //3//5//6
}

echo $sum;
?>