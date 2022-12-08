<?php


class Postingan extends Controller
{
    public function index($id)
    {
        // $data['user'] = $this->model('UserModel')->getuserData();
        $data['userID'] = $this->model('UserModel')->getuserId($id);
        $this->view('adminComp/header');
        // $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar');
        $this->view('home/userFolder', $data);
        $this->view('adminComp/footer');
    }

    public function userfolder($id)
    {
        // $id = $_GET['id'];
        // $data['user'] = $this->model('UserModel')->getuserData();
        $data['ID'] = $this->model('UserModel')->getuserId($id);
        $this->view('adminComp/header');
        // $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar');
        $this->view('home/userFolder', $data);
        $this->view('adminComp/footer');
    }
}
