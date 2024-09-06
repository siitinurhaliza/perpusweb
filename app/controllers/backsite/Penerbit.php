<?php

class Penerbit extends Controller
{
    public function index()
{
    $data['title'] = 'Impresum Buku';
    $data['buku'] = $this->model('BukuModel')->getAllBuku();
    $this->view('backsite/templates/style', $data);
    $this->view('backsite/templates/header', $data);
    $this->view('backsite/templates/sidebar', $data);
    $this->view('backsite/templates/breadcrumb', $data);
    $this->view('backsite/penerbit/index', $data);
    $this->view('backsite/templates/footer');
    $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Penerbit';
        $data['buku'] = $this->model('BukuModel')->cariBuku();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/penerbit/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

}