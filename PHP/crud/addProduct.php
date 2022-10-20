<?php

require_once 'Crud.php';

$crud = new Crud('products');

?>

<form method="post" action="addProduct.php">
    <div>
        <label for="productName">Product Name: </label>
        <input type="text" id="productName" value="" name="productName" placeholder="Product Name" required />
    </div>
    <div>
        <button type="submit">Add Product</button>
    </div>
</form>

<?php

if (isset($_POST) && !empty($_POST['productName'])) {
    $product_name = $_POST['productName'];
    $id = $crud->createProduct($product_name);
    echo "$product_name inserted successfully with id: $id<br/>";
    echo '<a href="index.php">Click here</a> to go back to product list';
}
