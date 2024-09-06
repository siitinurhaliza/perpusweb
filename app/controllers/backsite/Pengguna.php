<?php
class Pengguna extends Controller
{

    public function index()
    {
        $data['title'] = 'Pengguna';
        $data['pengguna'] = $this->model('PenggunaModel')->getAllPengguna();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/pengguna/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Pengguna';
        $data['pengguna'] = $this->model('PenggunaModel')->cariPengguna();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/pengguna/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Pengguna';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/pengguna/create');
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function store()
    {
        if (isset($_POST['proses'])) {
            $namaFile = $_FILES['foto']['name'];
            $ukuranFile = $_FILES['foto']['size'];
            $error = $_FILES['foto']['error'];
            $tmpName = $_FILES['foto']['tmp_name'];

            if ($ukuranFile > 1000000) {
                Flasher::setMessage('Gagal', 'disimpan, Ukuran file melebihi 1 MB', 'danger');
                header('location: ' . BASEURL . '/backsite/Pengguna');
                exit;
            }

            if ($error === 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    if ($this->model('PenggunaModel')->tambahPengguna([
                        "foto"   => $namaFileBaru,
                        "nama"   => $_POST['nama'],
                        "email"  => $_POST['email'],
                        "status" => $_POST['status'],
                        "level"  => $_POST['level'],
                        "tlp"    => $_POST['tlp'],
                    ]) > 0) {
                        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                        header('location: ' . BASEURL . '/backsite/Pengguna');
                        exit;
                    }
                }
            }
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/Pengguna');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Pengguna';
        $data['pengguna'] = $this->model('PenggunaModel')->getPenggunaById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/pengguna/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if (isset($_POST['proses'])) {
            $id = $_POST['id'];
            $namaFile = $_FILES['foto']['name'];
            $ukuranFile = $_FILES['foto']['size'];
            $error = $_FILES['foto']['error'];
            $tmpName = $_FILES['foto']['tmp_name'];

            // Cek apakah ada gambar yang diupload
            if ($ukuranFile > 0) {
                // Proses update gambar
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    // Update data anggota dengan foto baru
                    $data = [
                        "id" => $id,
                        "foto" => $namaFileBaru,
                        "nama"   => $_POST['nama'],
                        "email"  => $_POST['email'],
                        "status" => $_POST['status'],
                        "level"  => $_POST['level'],
                        "tlp"    => $_POST['tlp'],
                    ];

                    if ($this->model('PenggunaModel')->updatePengguna($data) > 0) {
                        Flasher::setMessage('Berhasil', 'diupdate', 'success');
                        header('location: ' . BASEURL . '/backsite/pengguna');
                        exit;
                    }
                } else {
                    Flasher::setMessage('Gagal', 'Update foto', 'danger');
                    header('location: ' . BASEURL . '/backsite/pengguna/edit/' . $id);
                    exit;
                }
            } else {
                // Jika tidak ada gambar yang diupload, update data anggota tanpa mengubah foto
                $data = [
                    "id" => $id,
                    "nama"   => $_POST['nama'],
                        "email"  => $_POST['email'],
                        "status" => $_POST['status'],
                        "level"  => $_POST['level'],
                        "tlp"    => $_POST['tlp'],
                    // tambahkan field lain yang perlu diupdate
                ];

                if ($this->model('PenggunaModel')->updatePengguna($data) > 0) {
                    Flasher::setMessage('Berhasil', 'diupdate', 'success');
                    header('location: ' . BASEURL . '/backsite/pengguna');
                    exit;
                } else {
                    Flasher::setMessage('Gagal', 'diupdate', 'danger');
                    header('location: ' . BASEURL . '/backsite/pengguna/edit/' . $id);
                    exit;
                }
            }
        }
    }
    public function deploy($id)
    {
        if ($this->model('PenggunaModel')->deletePengguna($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/Pengguna');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/Pengguna');
            exit;
        }
    }
}
