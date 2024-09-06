<?php

class Seni extends Controller
{
    public function index()
    {
        $data['title'] = 'seni';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $data['filsafat'] = $this->model('FilsafatModel')->getAllFilsafat();
        $data['agama'] = $this->model('AgamaModel')->getAllAgama();
        $data['bahasa'] = $this->model('BahasaModel')->getAllBahasa();
        $data['ipm'] = $this->model('IpmModel')->getAllIpm();
        $data['ipt'] = $this->model('IptModel')->getAllIpt();
        $data['sastra'] = $this->model('SastraModel')->getAllSastra();
        $data['sejarah'] = $this->model('SejarahModel')->getAllSejarah();
        $data['seni'] = $this->model('SeniModel')->getAllSeni();
        $data['sosial'] = $this->model('SosialModel')->getAllSosial();
        $data['peminjaman'] = $this->model('PeminjamanModel')->getAllPeminjaman();
        $data['pengembalian'] = $this->model('PengembalianModel')->getAllPengembalian();
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/seni/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }
    

    public function search()
    {
        $data['title'] = 'Katalog';
        $data['Seni'] = $this->model('SeniModel')->cariSeni();
        $data['key'] = $_POST['key'];
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/katalog/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }
}
