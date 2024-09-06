<?php
class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('frontsite/templates/style', $data);
      
        $this->view('frontsite/login/index', $data);
        $this->view('frontsite/templates/script');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Proses login
            $loginModel = $this->model('LoginModel');
            $user = $loginModel->getUser($username, $password);

            if ($user) {
                header('Location: ' . BASEURL . '/backsite/dashboard');
                exit();
            } else {
                Flasher::setMessage('salah', 'periksa kembali password dan username anda', 'danger');
                header('Location: ' . BASEURL . '/frontsite/login');
                exit;
            }
        }
    }
}
