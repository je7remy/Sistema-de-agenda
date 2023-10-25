<?php
class ConectarDB {
    private $server = "mysql:host=localhost;dbname=agenda";
    private $user = "root";
    private $pass = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $conn;

    public function open() {
        try {
            $this->conn = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Ocurrió un problema con la conexión: " . $e->getMessage();
        }
    }

    public function close() {
        $this->conn = null;
    }
}
?>
