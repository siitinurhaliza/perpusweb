<?php
class Peminjaman extends Controller
{
    public function index()
    {
        $data['title'] = 'Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->getAllPeminjaman();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->cariPeminjaman();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Peminjaman';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/create');
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function store()
    {
        if ($this->model('PeminjamanModel')->tambahPeminjaman($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        }
    }

    private function hitungDenda($tglkembali)
    {
        $tanggalSaatIni = date("Y-m-d");
        $tanggalKembali = date("Y-m-d", strtotime($tglkembali));

        if ($tanggalSaatIni > $tanggalKembali) {
            $selisihHari = strtotime($tanggalSaatIni) - strtotime($tanggalKembali);
            $selisihHari = floor($selisihHari / (60 * 60 * 24));
            $denda = $selisihHari * 1000;
        } else {
            $denda = 0;
        }

        return strval(intval($denda));
    }


    public function move_to_pengembalian($id)
    {
        $data = $this->model('PeminjamanModel')->getPeminjamanById($id);

        if ($data) {
            $denda = $this->hitungDenda($data['tanggalkembali']);

            $pengembalianData = [
                'nama' => $data['nama'],
                'judul' => $data['judul'],
                'tanggalpinjam' => $data['tanggalpinjam'],
                'tanggalkembali' => $data['tanggalkembali'],
                'kembali' => date('Y-m-d'),
                'jumlah' => $data['jumlah'],
                'status' => "dikembalikan",
                'kelas' => $data['kelas'],
                'denda' => $denda
            ];

            $move = $this->model('PengembalianModel')->tambahPengembalian($pengembalianData);

            if ($move > 0) {
                $this->model('PeminjamanModel')->deletePeminjaman($data['id']);
                Flasher::setMessage('Berhasil', 'ditambahkan ke tabel pengembalian', 'success');
                header("Location: " . BASEURL . "/backsite/pengembalian");
            } else {
                Flasher::setMessage('Gagal', 'ditambahkan ke tabel pengembalian', 'danger');
                header("Location: " . BASEURL . "/backsite/peminjaman");
            }
        } else {
            Flasher::setMessage('Tidak Ditemukan', '', 'danger');
            header("Location: " . BASEURL . "/backsite/peminjaman");
            exit();
        }
    }



    public function edit($id)
    {
        $data['title'] = 'Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->getPeminjamanById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if ($this->model('PeminjamanModel')->updatePeminjaman($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        }
    }
    public function deploy($id)
    {
        if ($this->model('PeminjamanModel')->deletePeminjaman($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        }
    }
}