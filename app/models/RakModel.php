<?php
class RakModel {
    private $table = 'rak';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllRak() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRakById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahRak($data) {
        $query = "INSERT INTO rak (nomor, nama, keterangan ) VALUES (:nomor, :nama, :keterangan)";
        $this->db->query($query);
        $this->db->bind('nomor', $data['nomor']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateRak($data) {
        $query = "UPDATE rak SET nomor=:nomor, nama=:nama, keterangan=:keterangan WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nomor', $data['nomor']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteRak($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariRak() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}