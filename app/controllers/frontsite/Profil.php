<?php
class Profil extends Controller
{
    public function index()
    {
        $data['title'] = 'Profil';
        $data['orgs'] = json_encode($this->model('Struktur_OrganisasiModel')->getAll());
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/profil/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }
}
