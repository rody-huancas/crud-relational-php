<?php

require_once 'config/connection.php';
require_once 'models/products.php';

class ProductController
{
    private $productModel;

    public function __construct($connection)
    {
        $this->productModel = new Product($connection);
    }

    public function index()
    {
        return $this->productModel->getAllProducts();
    }
}
