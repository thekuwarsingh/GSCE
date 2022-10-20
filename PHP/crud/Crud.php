<?php

require_once 'Db.php';

class Crud
{
    private $table_name;

    public function __construct($table_name)
    {
        $this->table_name = $table_name;
    }

    public function readProducts()
    {
        $db = Db::connect();

        $table_name = $this->table_name;
        
        $result = $db->query("SELECT * FROM $table_name WHERE deleted = 0");

        $products = [];

        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        return $products;
    }

    public function createProduct($product_name)
    {
        $db = Db::connect();

        $table_name = $this->table_name;
        
        $query = "INSERT INTO $table_name (product_name) VALUES ('$product_name');";

        $db->query($query);

        return $db->insert_id;
    }

    public function updateProduct($product_id, $product_name)
    {
        $db = Db::connect();

        $table_name = $this->table_name;
        
        $query = "UPDATE $table_name SET product_name = '$product_name' WHERE id = $product_id;";

        $db->query($query);

        return $db->insert_id;
    }

    public function deleteProduct($product_id)
    {
        $db = Db::connect();

        $table_name = $this->table_name;
        
        $query = "UPDATE $table_name SET deleted = 1 WHERE id = $product_id;";

        // $query = "DELETE FROM $table_name WHERE id = $product_id;";

        $db->query($query);

        return $db->insert_id;
    }
}