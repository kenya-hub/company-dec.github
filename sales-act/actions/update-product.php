<?php
include '../classes/Product.php';

$product = new Product;

$product->updateProduct($_POST);

?>