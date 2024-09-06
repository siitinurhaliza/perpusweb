<?php
class PenerbitModel {
    private $table = 'penerbit';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPenerbit() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPenerbitById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPenerbit($data) {
        $query = "INSERT INTO penerbit ( keterangan, alamat, tlp, kota, tahunterbit, judul, penerbit, pengarang ) VALUES (:nama, :keterangan, :alamat, :tlp, :kota, :tahunterbit, :judul, :penerbit, :pengarang)";
        $this->db->query($query);
       
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('tlp', $data['tlp']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('tahunterbit', $data['tahunterbit']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePenerbit($data) {
        $query = "UPDATE penerbit SET keterangan=:keterangan, alamat=:alamat, tlp=:tlp, kota=:kota, tahunterbit=:tahunterbit, judul=:judul, penerbit=:penerbit, pengarang=:pengarang WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('tlp', $data['tlp']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('tahunterbit', $data['tahunterbit']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    

    public function deletePenerbit($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariPenerbit() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}