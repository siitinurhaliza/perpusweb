<?php
class Ipt extends Controller
{
    public function index()
    {
        $data['title'] = 'Ilmu Pengetahuan Teknologi (600)';
        $data['ipt'] = $this->model('IptModel')->getAllIpt();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/ipt/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Ipt';
        $data['ipt'] = $this->model('IptModel')->cariIpt();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/ipt/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Ipt';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/ipt/create');
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
                header('location: ' . BASEURL . '/backsite/ipt');
                exit;
            }

            if ($error === 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    $data = [
                        "foto" => $namaFileBaru,
                        "judul" => $_POST['judul'],
                        "stok" => $_POST['stok'],
                        "kategori" => $_POST['kategori'],
                        "inventaris" => $_POST['inventaris'],
                        "tanggal" => $_POST['tanggal'],
                        "pengarang" => $_POST['pengarang'],
                        "isbn" => $_POST['isbn'],
                        "klasifikasi" => $_POST['klasifikasi'],
                        "rusak" => $_POST['rusak'],
                        "harga" => $_POST['harga'],
                        "penerbit" => $_POST['penerbit'],
                    ];

                    if ($this->model('IptModel')->tambahIpt($data) > 0) {
                        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                        header('location: ' . BASEURL . '/backsite/ipt');
                        exit;
                    }
                }
            }
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/ipt');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Ipt';
        $data['ipt'] = $this->model('IptModel')->getIptById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/ipt/edit', $data);
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

            $iptLama = $this->model('IptModel')->getIptById($id);
            $fotoLama = $iptLama['foto'];

            if ($ukuranFile > 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    $foto = $namaFileBaru;
                } else {
                    Flasher::setMessage('Gagal', 'Update foto', 'danger');
                    header('location: ' . BASEURL . '/backsite/ipt/edit/' . $id);
                    exit;
                }
            } else {
                $foto = $fotoLama;
            }

            $data = [
                "id" => $id,
                "foto" => $foto,
                "judul" => $_POST['judul'] ?? '',
                "stok" => $_POST['stok'] ?? 0,
                "kategori" => $_POST['kategori'] ?? '',
                "inventaris" => $_POST['inventaris'] ?? '',
                "tanggal" => $_POST['tanggal'] ?? '',
                "pengarang" => $_POST['pengarang'] ?? '',
                "isbn" => $_POST['isbn'] ?? '',
                "klasifikasi" => $_POST['klasifikasi'] ?? '',
                "rusak" => $_POST['rusak'] ?? 0,
                "harga" => $_POST['harga'] ?? 0,
                "penerbit" => $_POST['penerbit'] ?? ''
            ];

            if ($this->model('IptModel')->updateIpt($data) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . BASEURL . '/backsite/ipt');
                exit;
            } else {
                Flasher::setMessage('Gagal', 'diupdate', 'danger');
                header('location: ' . BASEURL . '/backsite/ipt/edit/' . $id);
                exit;
            }
        }
    }

    public function deploy($id)
    {
        if ($this->model('IptModel')->deleteIpt($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/ipt');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/ipt');
            exit;
        }
    }
}
