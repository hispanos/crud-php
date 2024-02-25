<!-- Generar conexión con la base de datos musql llamada crud_productos -->
<?php
class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '191296necocli';
    private $database = 'crud_productos';
    public $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}
?>