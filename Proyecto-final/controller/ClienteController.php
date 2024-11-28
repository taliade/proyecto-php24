<?php
require_once 'models/Cliente.php';

class ClienteController {
    public function registrarCliente($datos) {
        $cliente = new Cliente();
        return $cliente->create($datos);
    }
}
?>
