<?php

require_once 'controllers/ProductController.php';

$productController = new ProductController($connection);
$products = $productController->index();

require 'views/products.php';
