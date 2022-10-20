<?php

require_once 'Crud.php';

$crud = new Crud('products');

$id = $_GET['id'] ?? '';

?>

<form method="post" action="editProduct.php">
    <div>
        <label for="productName">Product Name: </label>
        <input type="text" id="productName" value="" name="productName" placeholder="Product Name" required />
    </div>
    <div>
        <button type="submit">Update Product</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
</form>

<?php

if (isset($_POST) && !empty($_POST['productName'])) {
    $product_id = $_POST['id'];
    $product_name = $_POST['productName'];
    $id = $crud->updateProduct($product_id, $product_name);
    echo "Product with id: $product_id updated successfully with product name: $product_name<br/>";
    echo '<a href="index.php">Click here</a> to go back to product list';
}
