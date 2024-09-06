<?php
class Services extends Controller
{
public function index()
{
$data['title'] = 'Services';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/services/index');
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}
