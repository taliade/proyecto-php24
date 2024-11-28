<?php
require_once 'models/Producto.php';

class CarritoController {
    private $carrito = [];

    public function agregarProducto($id, $cantidad) {
        $producto = new Producto();
        $detalle = $producto->obtenerProductoPorId($id);
        
        $this->carrito[] = [
            'id' => $detalle['id_producto'],
            'nombre' => $detalle['nombre'],
            'precio' => $detalle['precio'],
            'cantidad' => $cantidad
        ];
    }

    public function obtenerCarrito() {
        return $this->carrito;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->carrito as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }
        return $total;
    }
}
?>