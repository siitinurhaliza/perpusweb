<?php
class TypeuserModel {
    private $table = 'typeuser';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllTypeuser() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTypeuserById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahTypeuser($data) {
        $query = "INSERT INTO typeuser (nama) VALUES (:nama)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateTypeuser($data) {
        $query = "UPDATE typeuser SET nama=:nama WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteTypeuser($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariTypeuser() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}