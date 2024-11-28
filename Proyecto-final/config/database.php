<?php
class Database {
    private $host = "localhost"; // Cambia si usas otro servidor
    private $db_name = "tienda_online"; // Nombre de tu base de datos
    private $username = "root"; // Usuario por defecto en XAMPP
    private $password = ""; // Contraseña vacía en XAMPP
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>

