<?php
class Agama extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Buku Agama (200)';
        $data['agama'] = $this->model('AgamaModel')->getAllAgama();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/agama/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Agama';
        $data['agama'] = $this->model('AgamaModel')->cariAgama();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/agama/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Agama';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/agama/create');
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
                header('location: ' . BASEURL . '/backsite/agama');
                exit;
            }
    
            if ($error === 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;
    
                if (move_uploaded_file($tmpName, $tujuan)) {
                    $data = [
                        "foto"   => $namaFileBaru,
                        "judul"   => $_POST['judul'],
                        "stok"   => $_POST['stok'],
                        "kategori"   => $_POST['kategori'],
                        "inventaris"   => $_POST['inventaris'],
                        "tanggal"   => $_POST['tanggal'],
                        "pengarang"   => $_POST['pengarang'],
                        "isbn"   => $_POST['isbn'],
                        "klasifikasi"   => $_POST['klasifikasi'],
                        "rusak"   => $_POST['rusak'],
                        "harga"   => $_POST['harga'],
                        "penerbit"   => $_POST['penerbit'],
                    ];
    
                    if ($this->model('AgamaModel')->tambahAgama($data) > 0) {
                        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                        header('location: ' . BASEURL . '/backsite/agama');
                        exit;
                    }
                }
            }
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/agama');
            exit;
        }
    }
    
    public function edit($id)
    {
        $data['title'] = 'Agama';
        $data['agama'] = $this->model('AgamaModel')->getAgamaById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/agama/edit', $data);
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
    
            $bukuLama = $this->model('AgamaModel')->getAgamaById($id);
            $fotoLama = $bukuLama['foto'];
    
            if ($ukuranFile > 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;
    
                if (move_uploaded_file($tmpName, $tujuan)) {
                    $foto = $namaFileBaru;
                } else {
                    Flasher::setMessage('Gagal', 'Update foto', 'danger');
                    header('location: ' . BASEURL . '/backsite/agama/edit/' . $id);
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
    
            if ($this->model('AgamaModel')->updateAgama($data) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . BASEURL . '/backsite/agama');
                exit;
            } else {
                Flasher::setMessage('Gagal', 'diupdate', 'danger');
                header('location: ' . BASEURL . '/backsite/agama/edit/' . $id);
                exit;
            }
        }
    }
    
    public function deploy($id)
    {
        if ($this->model('AgamaModel')->deleteAgama($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/agama');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/agama');
            exit;
        }
    }
}
