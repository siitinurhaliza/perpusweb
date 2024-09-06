<?php
class Tujuan extends Controller
{
public function index()
{
$data['title'] = 'Tujuan';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/tujuan/index', $data);
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}
