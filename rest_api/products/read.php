<?php
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/dbclass.php'; // DataBase
include_once '../entities/product.php'; // Product
 
$dbclass = new DBClass();

$connection = $dbclass->getConnection();

$product = new Product($connection);

$stmt = $product->read();



$count = $stmt->num_rows;

// echo "<pre>";

// print_r($count);

// die;

if($count > 0){


    $products = array();
    $products["body"] = array();
    $products["count"] = $count;

    while ($row = mysqli_fetch_assoc($stmt)){

        extract($row);

        $p = array(
        	"id" => $id,
             "sku" => $sku,
             "barcode" => $barcode,
             "name" => $name,
             "price" => $price,
             "unit" => $unit,
             "quantity" => $quantity,
             "minquantity" => $minquantity,
             "createdAt" => $createdAt,
             "createdAt" => $createdAt,
             "updatedAt" => $updatedAt,
        );

        // $p  = array(
        //       "id" => $id,
        //       "sku" => $sku,
        //       "barcode" => $barcode,
        //       "name" => $name,
        //       "price" => $price,
        //       "unit" => $unit,
        //       "quantity" => $quantity,
        //       "minquantity" => $minquantity,
        //       "createdAt" => $createdAt,
        //       "createdAt" => $createdAt,
        //       "updatedAt" => $updatedAt,
        //       // "family_id" => $family_id,
        //       // "location_id" => $location_id
        // );

         array_push($products["body"], $p);
    }

    echo json_encode($products);
}

else {

    echo json_encode(
        array("body" => array(), "count" => 0)
    );
}
?>