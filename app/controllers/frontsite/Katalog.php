<?php

class Katalog extends Controller
{
    public function index()
    {
        $data['title'] = 'Katalog';
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
        $this->view('frontsite/katalog/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }

    public function getBooksByCategory($category) {
        if ($category == 'Karya Umum') {
            $books = $this->model('BukuModel')->getKaryaUmumBooks();
        } elseif ($category == 'Filsafat') {
            $books = $this->model('FilsafatModel')->getFilsafatBooks();
        } 
        // Tambahkan blok else if untuk kategori lain sesuai kebutuhan
    
        echo json_encode($books);
    }
    

    public function search()
    {
        $data['title'] = 'Katalog';
        $data['Buku'] = $this->model('BukuModel')->cariBuku();
        $data['key'] = $_POST['key'];
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/katalog/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }
}
