<?php

require_once 'Crud.php';

$crud = new Crud('products');

$products = $crud->readProducts();

if (count($products) > 0) {
?>

<table border="1">
    <caption>Products</caption>
    <thead>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($products as $product) { ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['product_name']; ?></td>
                <td>
                    <a href="editProduct.php?id=<?php echo $product['id']; ?>">
                    Edit</a>
                </td>
                <td><a href="deleteProduct.php?id=<?php echo $product['id']; ?>">
                    Delete</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php } else { ?>
<h3>No Products</h3>
<?php } ?>

<br/>

<a href="addProduct.php">Add Product</a>


