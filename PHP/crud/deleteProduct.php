<?php

require_once 'Crud.php';

$crud = new Crud('products');

$product_id = $_GET['id'] ?? '';

if (isset($product_id) && !empty($product_id)) {
    $id = $crud->deleteProduct($product_id);
    echo "Product with id: $product_id deleted successfully<br/>";
    echo '<a href="index.php">Click here</a> to go back to product list';
}
