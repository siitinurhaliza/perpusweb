<?php
class Laporanpinjam extends Controller
{
    public function index()
    {
        $data['title'] = 'Laporan Peminjaman Buku Perpustakaan';
        $data['peminjaman'] = $this->model('PeminjamanModel')->getAllPeminjaman();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/laporanpinjam/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }
    public function search()
    {
        $data['title'] = 'Laporanpinjam';
        $data['peminjaman'] = $this->model('PeminjamanModel')->cariPeminjaman();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/laporanpinjam/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function cetak()
    {
        $getByDate = [];
    
        if (isset($_POST['startDate']) && isset($_POST['endDate'])) {
            $startDateParts = explode('-', $_POST['startDate']);
            $endDateParts = explode('-', $_POST['endDate']);
    
            $startYear = $startDateParts[0];
            $startMonth = $startDateParts[1];
            $startDay = $startDateParts[2];
    
            $endYear = $endDateParts[0];
            $endMonth = $endDateParts[1];
            $endDay = $endDateParts[2];
    
            $getByDate = $this->model('PeminjamanModel')->cetakLaporanByDateRange($startYear, $startMonth, $startDay, $endYear, $endMonth, $endDay);
        } elseif (isset($_POST['month']) && isset($_POST['year'])) {
            $selectedMonth = $_POST['month'];
            $selectedYear = $_POST['year'];
    
            $getByDate = $this->model('PeminjamanModel')->cetakLaporanByMonthAndYear($selectedMonth, $selectedYear);
        } else {
            // Handle if no date range or month/year is provided, you may choose to show an error message or use a default date range
            $getByDate = $this->model('PeminjamanModel')->cetakPeminjaman();
        }
    
        $data['title'] = 'Laporanpinjam';
        $data['peminjaman'] = $getByDate;
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/laporanpinjam/cetak', $data);
        $this->view('backsite/templates/script');
    }
    

    public function print()
    {
        if ($this->model('LaporanpinjamModel')->cetakLaporanpinjam($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dicetak', 'success');
            header('location: ' . BASEURL . '/backsite/Laporanpinjam');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dicetak', 'danger');
            header('location: ' . BASEURL . '/backsite/Laporanpinjam');
            exit;
        }
    }
}
