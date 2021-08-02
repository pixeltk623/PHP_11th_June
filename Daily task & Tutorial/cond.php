<?php 
	
	// if (condition) {
	// 	// code...
	// }

	// if (condition) {
	// 	// code...
	// } else {
	// 	// code...
	// }

	// if (condition) {
	// 	// code...
	// } else if  {
	// 	// code...
	// } else if() {

	// } else {

	// }

	// switch() {

	// 	case 1:
	// 		break;
	// 	default:
	// 		break;
	// }
	
	$a = 14;	

	// if ($a>5) {
	// 	echo $a;
	// }
	
	
	// if (false) {
	// 	echo "Hello";
	// }

	// if ($a>5) {
	// 	echo "Hello";
	// } else {
	// 	echo "Hi";
	// }


	// if ($a==5) {
	// 	echo $a;
	// } else if($a==6) {
	// 	echo $a;
	// } else if($a==10) {
	// 	echo $a;
	// } else {
	// 	echo "Wrong Input";
	// }

	$month =  date("m");

	switch ($month) {
		case '01':
			echo "Jan";
			break;
		case '02':
			echo "Feb";
			break;
		case '03':
			echo "March";
			break;
		case '04':
			echo "April";
			break;
		case '05':
			echo "May";
			break;
		case '06':
			echo "June";
			break;
		case '07':
			echo "July";
			break;
		case '08':
			echo "Aug";
			break;
		case '09':
			echo "Sep";
			break;
		case '10':
			echo "Oct";
			break;
		case '11':
			echo "Nov";
			break;
		case '12':
			echo "Dec";
			break;
		
		default:
			echo "Error";
			break;
	}
	


?>

<select>
	<option value="">Select</option>
	<option value="">+</option>

	<option value="">+</option>
	<option value="">+</option>
</select>