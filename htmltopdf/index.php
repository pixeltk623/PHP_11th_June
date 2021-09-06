<?php 

$conn = mysqli_connect("localhost","root","","php_11th_june");

$query = "SELECT * FROM courses";
$result = mysqli_query($conn, $query);
while ($response[] = mysqli_fetch_object($result)) {}

$finalData = array_filter($response);

// echo "<pre>";

// print_r($finalData);

// die;

include_once 'vendor/autoload.php';
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$basePath = $dompdf->set_base_path("css/style.css/");


$html = '<style>
'.file_get_contents('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css').'
</style>';


$html .= "
<table class='table table-bordered table-active'>
  <tr>
    <th>Sr.No</th>
    <th>Class</th>
    <th>Name</th>
    <th>Created At</th>
  </tr>";
foreach ($finalData as $key => $value) {
	
	$html .= "<tr>";
	$html .=    "<td>".++$key."</td>";
	$html .=    "<td>".$value->class."</td>";
	$html .=    "<td>".$value->name."</td>";
	$html .=    "<td>".date("y-m-d", strtotime($value->created_at))."</td>";
  	$html .= "</tr>";

}
$html .= "</table>"; 

// echo  $html;
// die;

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>