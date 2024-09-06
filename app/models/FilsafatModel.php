<?php
class FilsafatModel
{
    private $table = 'filsafat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function countFilsafat()
    {
        $this->db->query('SELECT COUNT(*) as total_rows FROM ' . $this->table);
        return $this->db->single();
    }

    public function getAllFilsafat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
        
    }

    public function getFilsafatById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahFilsafat($data)
    {
        // Validasi panjang nomor telepon
    
        $query = "INSERT INTO filsafat (judul, foto, stok, kategori, inventaris, tanggal, pengarang, isbn, klasifikasi,  penerbit, harga, rusak) VALUES (:judul, :foto, :stok, :kategori, :inventaris, :tanggal, :pengarang, :isbn, :klasifikasi, :penerbit, :harga, :rusak)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('inventaris', $data['inventaris']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('isbn', $data['isbn']);
        $this->db->bind('klasifikasi', $data['klasifikasi']);
      
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('rusak', $data['rusak']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    

    public function updateFilsafat($data)
    {
        $query = "UPDATE filsafat SET judul=:judul, foto=:foto, stok=:stok, kategori=:kategori,  inventaris=:inventaris, tanggal=:tanggal, pengarang=:pengarang, isbn=:isbn, klasifikasi=:klasifikasi, penerbit=:penerbit, harga=:harga, rusak=:rusak WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('inventaris', $data['inventaris']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('isbn', $data['isbn']);
        $this->db->bind('klasifikasi', $data['klasifikasi']);
      
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('rusak', $data['rusak']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteFilsafat($id)
    {
        $getUser = $this->getFilsafatById($id);

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

    public function cariFilsafat()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM $this->table WHERE judul LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
