<?php
class Aturan extends Controller
{
    public function index()
    {
        $data['title'] = 'Aturan';
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/aturan/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }
}
