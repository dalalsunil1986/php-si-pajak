<?php

abstract class MasterModel {
    
    public $schema;
    public $table;
    public $primaryKey;

    function __construct() {
        $this->initDB();
    }

    private function initDB() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "skripsipajak";
        //Membuat koneksi baru ke database
        $db = new mysqli($servername, $username, $password, $database);
        //Mengecek apakah koneksi ke database berhasil
        if ($db->connect_error) {
            die("Koneksi ke database gagal. Cek folder app/database/db.php mungkin anda salah memasukkan username dan password mysql." . $conn->connect_error);
        }
        $this->db = $db;
    }

    function getAllData() {
        $query = "SELECT * FROM $this->table";
        return $this->db->query($query);
    }

    public function insert($data) {
        $query = "INSERT INTO {$this->table} VALUES (";
        foreach($arrays as $field=>$rule) {
            if(stringContaint($rule, 'auto')) {
                $query += "'{$data[$field]}',";
            } else {
                $query += "NULL,";
            }
        }
        $query = rtrim($query , ',');
        $query += ")";
        return $this->db->query($query);
    }
}

?>