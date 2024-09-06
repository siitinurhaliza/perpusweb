<?php
class PeminjamanModel
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function countPeminjaman()
    {
        $this->db->query('SELECT COUNT(*) as total_rows FROM ' . $this->table);
        return $this->db->single();
    }


    public function getAllPeminjaman()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPeminjamanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getPeminjamanByYear($year)
    {
        $this->db->query('SELECT MONTH(tanggalpinjam) AS bulan, COUNT(*) AS jumlah FROM ' . $this->table . ' WHERE YEAR(tanggalpinjam) = :year GROUP BY MONTH(tanggalpinjam)');
        $this->db->bind('year', $year);
        return $this->db->resultSet();
    }

    public function tambahPeminjaman($data)
    {
        $query = "INSERT INTO peminjaman (nama, judul, tanggalpinjam, tanggalkembali,  jumlah, kelas) VALUES (:nama, :judul, :tanggalpinjam, :tanggalkembali, :jumlah, :kelas)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cetakPeminjaman()
    {
        $query = "SELECT nama, judul, tanggalpinjam, tanggalkembali,  jumlah, kelas FROM peminjaman";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function cetakLaporanByMonthAndYear($month, $year)
    {
        // Sesuaikan kondisi sesuai kebutuhan
        $query = "SELECT * FROM peminjaman 
                  WHERE MONTH(tanggalpinjam) = :bulan AND YEAR(tanggalpinjam) = :tahun";

        // Bind parameter ke dalam query
        $this->db->query($query);
        $this->db->bind(':bulan', $month);
        $this->db->bind(':tahun', $year);

        return $this->db->resultSet();
    }
    public function cetakLaporanByDateRange($startYear, $startMonth, $startDay, $endYear, $endMonth, $endDay)
    {
        // Sesuaikan kondisi sesuai kebutuhan
        $query = "SELECT * FROM peminjaman 
                  WHERE (tanggalpinjam BETWEEN :start_date AND :end_date)
                  OR (tanggalkembali BETWEEN :start_date AND :end_date)";

        // Bind parameter ke dalam query
        $this->db->query($query);
        $this->db->bind(':start_date', "$startYear-$startMonth-$startDay");
        $this->db->bind(':end_date', "$endYear-$endMonth-$endDay");

        return $this->db->resultSet();
    }



    public function updatePeminjaman($data)
    {
        $query = "UPDATE peminjaman SET nama=:nama, judul=:judul, tanggalpinjam=:tanggalpinjam, tanggalkembali=:tanggalkembali, status=:status, jumlah=:jumlah, kelas=:kelas WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function deletePeminjaman($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariPeminjaman()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}