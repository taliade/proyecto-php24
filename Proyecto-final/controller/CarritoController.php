<?php
session_start();

class CarritoController {
    public function agregarProducto($id) {
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }

        if (isset($_SESSION['carrito'][$id])) {
            $_SESSION['carrito'][$id]['cantidad']++;
        } else {
            $_SESSION['carrito'][$id] = ['id' => $id, 'cantidad' => 1];
        }
    }

    public function obtenerCarrito() {
        return isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
    }

    public function vaciarCarrito() {
        unset($_SESSION['carrito']);
    }
}
?>
