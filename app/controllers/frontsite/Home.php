<?php
class Home extends Controller
{
public function index()
{
$data['title'] = 'Home';
$data['orgs'] = json_encode($this->model('Struktur_OrganisasiModel')->getAll());
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/home/index');
$this->view('frontsite/templates/script');
$this->view('frontsite/templates/footer');
}
}
