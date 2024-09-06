<?php
class AnggotaModel
{
    private $table = 'anggota';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function countAnggota()
    {
        $this->db->query('SELECT COUNT(*) as total_rows FROM ' . $this->table);
        return $this->db->single();
    }

    public function getAllAnggota()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAnggotaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahAnggota($data)
    {
        $query = "INSERT INTO anggota (foto, nisn, nama, kelas, jk, alamat) VALUES (:foto, :nisn, :nama, :kelas, :jk, :alamat)";

        $this->db->query($query);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('alamat', $data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateAnggota($data)
    {
        $query = "UPDATE anggota SET foto=:foto, nisn=:nisn, nama=:nama, kelas=:kelas, jk=:jk, alamat=:alamat WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteAnggota($id)
    {
        $getUser = $this->getAnggotaById($id);

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

    public function cariAnggota()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
