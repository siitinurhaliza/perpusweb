<?php
class Struktur_OrganisasiModel
{
    private $table = 'struktur_organisasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllOnly_id_name()
    {
        $this->db->query('SELECT id, nama FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahStruktur_Organisasi($data)
    {
        $query = "INSERT INTO struktur_organisasi (foto, jabatan, parent_key, nama ) VALUES (:foto,  :jabatan, :parent_key, :nama )";
        $this->db->query($query);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('parent_key', $data['parent_key']);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getStruktur_OrganisasiById($id)
    {
        $this->db->query("SELECT * FROM struktur_organisasi WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single(); // Assuming you have a method like 'single()' in your Database class
    }

    public function updateStruktur_Organisasi($data)
    {
        $query = "UPDATE struktur_organisasi SET foto=:foto, nama=:nama, jabatan=:jabatan, parent_key=:parent_key WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('parent_key', $data['parent_key']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function deleteStruktur_Organisasi($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function cariStruktur_Organisasi()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE title LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
