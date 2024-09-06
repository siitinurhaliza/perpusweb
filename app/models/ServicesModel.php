<?php
class ServicesModel {
    private $table = 'services';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllServices() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getServicesById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahServices($data) {
        $query = "INSERT INTO services (nama, keterangan, photo) VALUES (:nama, :keterangan, :photo)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('photo', $data['photo']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateServices($data) {
        $query = "UPDATE services SET nama=:nama, keterangan=:keterangan, photo=:photo WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('photo', $data['photo']);
        $this->db->bind('id', $data['id']); 
        $this->db->execute();
        return $this->db->rowCount();
    }
    

    public function deleteServices($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariServices() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}