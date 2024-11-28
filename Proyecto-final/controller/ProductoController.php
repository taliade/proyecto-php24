<?php
require_once 'models/Producto.php';

class ProductoController {
    public function obtenerProductos() {
        $producto = new Producto();
        return $producto->getAll();
    }
}
?>
