<?php
class Logout extends Controller
{
    public function index()
    {
        // Menampilkan pemberitahuan konfirmasi logout
        $this->confirmLogout();
    }

    public function confirmLogout()
    {
        $data['title'] = 'Confirm Logout';

        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/logout/index', $data); // Buat view ini untuk menampilkan konfirmasi
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function logout()
    {
        // Hapus sesi atau cookie yang menyimpan informasi login
        // Sesuaikan dengan implementasi sesi atau cookie yang Anda gunakan
        // Contoh untuk sesi:
        session_start();
        session_destroy();

        // Redirect ke halaman log in
        header('Location: ' . BASEURL . '/frontsite/login');
        exit();
    }
}
