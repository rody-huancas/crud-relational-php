<?php

class Product
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllProducts()
    {
        $sql = "SELECT productos.idProducto, categorias.nombreCategoria, marcas.nombreMarca, productos.precio, productos.descripcionProducto, productos.nombre 
                FROM productos 
                INNER JOIN categorias ON productos.categoriaId = categorias.id
                INNER JOIN marcas ON productos.marcaId = marcas.id";
        return $this->connection->query($sql);
    }
}
