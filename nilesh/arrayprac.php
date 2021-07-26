<?php

$list = array(

array("name" => "bill gates",
"position" => "microsoft ceo",
"salary" => "1300$",
"location" => "us",
"vimo" => "lic"

),

array(
"name" => "steve jobs",
"position" => "apple ceo",
"salary" => "1500$",
"location" => "africa",
"vimo" => "lic"

),

array(
"name" => "larry page",
"position" => "google ceo",
"salary" => "1800$",
"location" => "germany",
"vimo" => "lic"

),

array(
"name" => "mark",
"position" => "facebook ceo",
"salary" => "1300$",
"location" => "france",
"vimo" => "lic"

),

array(
"name" => "shiv nadar",
"position" => "hcl ceo",
"salary" => "1900$",
"location" => "india",
"vimo" => "lic"

)

);

count($list);
sizeof($list);
$arraylength = sizeof($list);
echo $arraylength;
// echo '<pre>';
// print_r ($Richpersonlist)[0][1];
// echo '<pre>';
// foreach ($Richpersonlist as $key => $value) {
//     echo '<pre>';
// print_r ($Richpersonlist)[0];
//  echo '<pre>';
// }
// for ($i=0; $i <4 ; $i++) { 
//     echo '<pre>';
//     print_r ($Richpersonlist[10]);
//       echo '<pre>';
// }
// echo "<pre>";
// print_r($richpersonlist);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <br><br><br><br><br>
    <table border="1" style="margin:auto; width:50%; border-collapse:collapse";>
        <tr>
            <th>Sr.no</th>
            <th>Full name</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Location</th>
            <th>Vimo</th>
        </tr>

        <?php

        foreach ($list as $key => $value) {
           ?>
      <tr>
        <td> <?php  echo ++$key;  ?></td>
        <td> <?php echo $value ["name"] ?> </td>
        <td> <?php echo $value["position"] ?> </td>
        <td> <?php echo $value["salary"] ?> </td>
        <td> <?php echo $value["location"] ?> </td>
        <td> <?php echo $value["vimo"] ?> </td>
    </tr>  
        <?php
        }
        ?>
       
    </table>
</body>
</html>