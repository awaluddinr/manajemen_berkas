<?php



class Controller
{

    public function view($view, $data = [])
    {
        if (!isset($_SESSION['login'])) {
            require_once '../app/views/' . $view . '.php';
        } else {
            if ($_SESSION['peran'] == 'footager' || $_SESSION['peran'] == 'editor') {
                require_once '../app/views/user/' . $view . '.php';
            } else {
                require_once '../app/views/admin/' . $view . '.php';
            }
        }
    }

    // public function Userview($view, $data = [])
    // {
    //     require_once '../app/views/user/' . $view . '.php';
    // }

    // public function Loginview($view, $data = [])
    // {
    //     require_once '../app/views/' . $view . '.php';
    // }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';

        return new $model;
    }
}
