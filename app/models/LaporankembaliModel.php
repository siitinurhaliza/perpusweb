<?php
class LaporankembaliModel {
    private $table = 'LaporankembaliModel';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllLaporankembali() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getLaporankembaliById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

   
    public function cetakLaporankembali($tahun, $bulan, $tanggal) {
        // Sesuaikan kondisi sesuai kebutuhan
        $query = "SELECT nama, judul, tanggalpinjam, tanggalkembali, status, kembali, jumlah FROM pengembalian 
                  WHERE YEAR(tanggalkembali) = :tahun AND MONTH(tanggalkembali) = :bulan AND DAY(tanggalkembali) = :tanggal";
        
        // Bind parameter ke dalam query
        $this->db->query($query);
        $this->db->bind(':tahun', $tahun);
        $this->db->bind(':bulan', $bulan);
        $this->db->bind(':tanggal', $tanggal);
    
        return $this->db->resultSet();
    }
    
    public function cariLaporankembali() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE tanggalpinjam LIKE :key OR tanggalkembali LIKE :key OR nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}