<?php
// Inicia la sesión
session_start();

// Cargar configuraciones y controladores
// require_once 'config/database.php';
require_once __DIR__ . '/config/database.php';

require_once 'controllers/ProductoController.php';
require_once 'controllers/CarritoController.php';
require_once 'controllers/ClienteController.php';

// Inicializar controladores
$productoController = new ProductoController();
$carritoController = new CarritoController();
$clienteController = new ClienteController();

// Manejo básico de rutas
$pagina = isset($_GET['p']) ? $_GET['p'] : 'inicio';
$accion = isset($_GET['accion']) ? $_GET['accion'] : null;

// Header común
include 'views/layouts/header.php';

// Enrutamiento básico
switch ($pagina) {
    case 'inicio':
        $productos = $productoController->obtenerProductos();
        include 'views/inicio.php';
        break;

    case 'carrito':
        if ($accion === 'agregar' && isset($_POST['id_producto'])) {
            $carritoController->agregarProducto($_POST['id_producto']);
        } elseif ($accion === 'vaciar') {
            $carritoController->vaciarCarrito();
        }
        $carrito = $carritoController->obtenerCarrito();
        include 'views/carrito.php';
        break;

    case 'cliente':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $clienteController->registrarCliente($_POST);
            echo "Cliente registrado con éxito.";
        }
        include 'views/cliente.php';
        break;

    default:
        echo "Página no encontrada.";
}

// Footer común
include 'views/layouts/footer.php';
?>
