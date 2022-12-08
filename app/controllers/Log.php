<?php


class Log extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            if ($_SESSION['peran'] == 'admin') {
                header('Location: ' . URL . '/Home');
            } elseif ($_SESSION['peran'] == 'editor' || $_SESSION['peran'] == 'footager') {
                header('Location: ' . URL . '/User');
            }
        }

        $this->view('login/login');
    }

    public function masuk()
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if (empty($user) || empty($pass)) {
            $_SESSION['no_user'] = 'Username atau Password Tidak Boleh Kosong';
            header('Location: ' . URL . '/Log');
            exit;
        }

        $data['login'] = $this->model('UserModel')->lov($user, $pass);
    }
}
