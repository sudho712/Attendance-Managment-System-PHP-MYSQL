<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "attendance_db";
    public $conn;

    // Constructor to establish connection
    public function __construct() {
        try {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);

            // Check connection
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            } else {
                echo "Connected successfully.";
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

// Create an instance of the Database class
$db = new Database();
?>
