<?php
class Contact extends Controller
{
public function index()
{
$data['title'] = 'Contact';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/contact/index');
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}
