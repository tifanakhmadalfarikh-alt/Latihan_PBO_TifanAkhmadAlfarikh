<?php
class Database {
    private $host = "localhost";
    private $username = "root"; // Sesuaikan jika menggunakan username database lain
    private $password = "";     // Kosongkan jika menggunakan XAMPP bawaan
    private $database = "DB_LATIHAN_PBO_TRPL1B_TifanAkhmadAlfarikh";
    public $conn;

    public function getConnection() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        // Cek apakah koneksi berhasil
        if ($this->conn->connect_error) {
            die("Koneksi Database Gagal: " . $this->conn->connect_error);
        }
        
        return $this->conn;
    }
}
?>