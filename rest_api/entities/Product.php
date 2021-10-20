<?php
class Product{

    // Connection instance
    private $connection;

    // table name
    private $table_name = "product";

    // table columns
    public $id;
    public $sku;
    public $barcode;
    public $name;
    public $price;
    public $unit;
    public $quantity;
    public $minquantity;
    public $createdAt; 
    public $updatedAt;
    public $family_id;
    public $location_id;

    public function __construct($connection){
        $this->connection = $connection;
    }

    //C
    public function create(){
       // $query = "INSERT INTO $this->table_name () VALUES ()";
        //$res = mysqli_query($this->connection, $query);
        return true;
    }
    //R
    public function read(){
        // echo $query = "SELECT c.name as family_name, p.id, p.sku, p.barcode, p.name, p.price, p.unit, p.quantity , p.minquantity, p.createdAt, p.updatedAt FROM " . $this->table_name . " p LEFT JOIN Family c ON p.family_id = c.id ORDER BY p.createdAt DESC";

        $query = "SELECT * FROM `product`";
        
        // echo "<pre>";
        // print_r($this->connection);

        $res = mysqli_query($this->connection, $query);

        // echo "<pre>";

        // print_r($res);
        // die;

        // $stmt = $this->connection->prepare($query);

        // $stmt->execute();

        return $res;
    }
    //U
    public function update(){}
    //D
    public function delete(){}
}