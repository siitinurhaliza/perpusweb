<?php
class LaporanpinjamModel
{
    private $table = 'LaporanpinjamModel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLaporanpinjam()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getLaporanpinjamById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function cetakLaporanpinjam($tahun, $bulan, $tanggal)
    {
        // Sesuaikan kondisi sesuai kebutuhan
        $query = "SELECT nama, judul, tanggalpinjam, tanggalpinjam, status, pinjam, jumlah FROM pengembalian 
                  WHERE YEAR(tanggalpinjam) = :tahun AND MONTH(tanggalpinjam) = :bulan AND DAY(tanggalpinjam) = :tanggal";

        // Bind parameter ke dalam query
        $this->db->query($query);
        $this->db->bind(':tahun', $tahun);
        $this->db->bind(':bulan', $bulan);
        $this->db->bind(':tanggal', $tanggal);

        return $this->db->resultSet();
    }

    public function cariLaporanpinjam()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE tanggalpinjam LIKE :key OR tanggalpinjam LIKE :key OR nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
