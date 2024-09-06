<?php
class Pengembalian extends Controller
{
    public function index()
    {
        $data['title'] = 'Pengembalian';
        $data['pengembalian'] = $this->model('PengembalianModel')->getAllPengembalian();  
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/pengembalian/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Pengembalian';
        $data['pengembalian'] = $this->model('PengembalianModel')->cariPengembalian();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/pengembalian/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Pengembalian';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/pengembalian/create');
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function store()
    {
        if ($this->model('PengembalianModel')->tambahPengembalian($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/backsite/Pengembalian');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/Pengembalian');
            exit;
        }
    }
   
    public function edit($id)
    {
        $data['title'] = 'Pengembalian';
        $data['pengembalian'] = $this->model('PengembalianModel')->getPengembalianById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/pengembalian/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if ($this->model('PengembalianModel')->updatePengembalian($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . BASEURL . '/backsite/Pengembalian');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . BASEURL . '/backsite/Pengembalian');
            exit;
        }
    }
    public function deploy($id)
    {
        if ($this->model('PengembalianModel')->deletePengembalian($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/Pengembalian');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/Pengembalian');
            exit;
        }
    }
   
   

}