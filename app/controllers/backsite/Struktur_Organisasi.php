<?php
class Struktur_Organisasi extends Controller
{
    public function index()
    {
        $data['title'] = 'Struktur Organisasi Smps Pgri Kab.Pelalawan';
        $data['struktur_organisasi'] = $this->model('Struktur_OrganisasiModel')->getAll();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/struktur_organisasi/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }


    public function create()
    {
        $data['title'] = 'Struktur_Organisasi';
        $data['tree_parent'] = $this->model('Struktur_OrganisasiModel')->getAllOnly_id_name();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/struktur_organisasi/create', $data);
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
                header('location: ' . BASEURL . '/backsite/struktur_organisasi');
                exit;
            }

            if ($error === 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_CHART_ORG . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    if ($this->model('Struktur_OrganisasiModel')->tambahStruktur_Organisasi([
                        "foto"   => $namaFileBaru,
                        "jabatan"   => $_POST['jabatan'],
                        "nama"   => $_POST['nama'],
                        "parent_key"   => $_POST['parent_key'],


                    ]) > 0) {
                        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                        header('location: ' . BASEURL . '/backsite/struktur_organisasi');
                        exit;
                    }
                }
            }
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/struktur_organisasi');
            exit;
        }
        $data = [

            "jabatan"   => $_POST['jabatan'],
            "nama"   => $_POST['nama'],
            "parent_key"   => $_POST['parent_key'],
        ];

        $Struktur_OrganisasiModel = $this->model('Struktur_OrganisasiModel');
        $Struktur_OrganisasiModel->tambahStruktur_Organisasi($data);

        // Redirect ke halaman katalog di frontsite setelah menambah buku
        header("Location: " . BASEURL . "/frontsite/profil");
    }


    public function edit($id)
    {
        $data['title'] = 'Struktur_Organisasi';
        $data['struktur_organisasi'] = $this->model('Struktur_OrganisasiModel')->getStruktur_OrganisasiById($id);
        $data['tree_parent'] = $this->model('Struktur_OrganisasiModel')->getAllOnly_id_name();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/struktur_organisasi/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if (isset($_POST['proses'])) {
            $id = $_POST['id'];
            $namaFile = $_FILES['foto_baru']['name'];
            $ukuranFile = $_FILES['foto_baru']['size'];
            $error = $_FILES['foto_baru']['error'];
            $tmpName = $_FILES['foto_baru']['tmp_name'];

            // Cek apakah ada gambar yang diupload
            if ($ukuranFile > 0) {
                // Proses update gambar
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_CHART_ORG . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    $data = [
                        "id"         => $id,
                        "foto"       => $namaFileBaru,
                        "jabatan"    => $_POST['jabatan'],
                        "nama"       => $_POST['nama'],
                        "parent_key" => $_POST['parent_key'],
                    ];

                    if ($this->model('Struktur_OrganisasiModel')->updateStruktur_Organisasi($data) > 0) {
                        Flasher::setMessage('Berhasil', 'diupdate', 'success');
                        header('location: ' . BASEURL . '/backsite/struktur_organisasi');
                        exit;
                    }
                } else {
                    Flasher::setMessage('Gagal', 'Update foto', 'danger');
                    header('location: ' . BASEURL . '/backsite/struktur_organisasi/edit/' . $id);
                    exit;
                }
            } else {
                // Jika tidak ada gambar yang diupload, update data buku tanpa mengubah foto
                $data = [
                    "id" => $id,
                    "foto"       => $_POST['foto_lama'],
                    "jabatan"   => $_POST['jabatan'],
                    "nama"   => $_POST['nama'],
                    "parent_key"   => $_POST['parent_key'],
                    // tambahkan field lain yang perlu diupdate
                ];

                if ($this->model('Struktur_OrganisasiModel')->updateStruktur_Organisasi($data) > 0) {
                    Flasher::setMessage('Berhasil', 'diupdate', 'success');
                    header('location: ' . BASEURL . '/backsite/struktur_organisasi');
                    exit;
                } else {
                    Flasher::setMessage('Gagal', 'diupdate', 'danger');
                    header('location: ' . BASEURL . '/backsite/struktur_organisasi/edit/' . $id);
                    exit;
                }
            }
        }
    }
    public function deploy($id)
    {
        if ($this->model('Struktur_OrganisasiModel')->deleteStruktur_Organisasi($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/struktur_organisasi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/struktur_organisasi');
            exit;
        }
    }
}
