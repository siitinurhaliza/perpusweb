<?php
class PenggunaModel
{
    private $table = 'pengguna';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengguna()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPenggunaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPengguna($data)
    {
        $query = "INSERT INTO pengguna (foto, nama, email, status, level, tlp ) VALUES (:foto, :nama, :email, :status, :level, :tlp )";
        $this->db->query($query);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('tlp', $data['tlp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePengguna($data)
    {
        $query = "UPDATE pengguna SET foto=:foto, nama=:nama, email=:email, status=:status, level=:level, tlp=:tlp WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('tlp', $data['tlp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePengguna($id)
    {
        $getUser = $this->getPenggunaById($id);

        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        if ($getUser && isset($getUser['foto'])) {
            $pathFile = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $getUser['foto'];
            if (file_exists($pathFile)) {
                unlink($pathFile);
            }
        }

        return $this->db->rowCount();
    }

    public function cariPengguna()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
