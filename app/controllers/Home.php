<?php


class Home extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: ' . URL . '/Log');
        } else {
            if ($_SESSION['peran'] !== 'admin') {
                header('Location: ' . URL . '/User');
            }
        }
        $data['jumlahFolder'] = $this->model('folderModel')->folderAllUser();
        $data['jumlahGambar'] = $this->model('postModel')->allImage();
        $data['jumlahVideo'] = $this->model('postModel')->allVideo();
        $data['jumlahAudio'] = $this->model('postModel')->allAudio();
        $data['profile'] = $this->model('UserModel')->getprofile();
        $jumlahdata = 5;

        $halamanaktif = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $dataawal = ($halamanaktif - 1) * $jumlahdata;
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['history'] = $this->model('postModel')->getHistory();
        $data['hapusTime'] = $this->model('postModel')->hapusTime();
        $data['user'] = $this->model('UserModel')->getuserDataLimit();
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/dashboard', $data);
        $this->view('adminComp/footer');
    }

    public function user_akses()
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['profile'] = $this->model('UserModel')->getprofile();
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/info-akses');
        $this->view('adminComp/footer');
    }

    public function kelola_user()
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['profile'] = $this->model('UserModel')->getprofile();
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/kelola-user', $data);
        $this->view('adminComp/footer');
    }

    public function aktivitas()
    {

        $jumlahdata = 5;

        $data['halamanaktif'] = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $dataawal = ($data['halamanaktif'] * $jumlahdata) - $jumlahdata;
        $data['historycount'] = $this->model('postModel')->getHistoryCount();
        $data['jumlahpagination'] = ceil($data['historycount'] / $jumlahdata);
        $jumlahlink = 3;
        if ($data['halamanaktif'] > $jumlahlink) {
            $data['start'] = $data['halamanaktif'] - $jumlahlink;
        } else {
            $data['start'] = 1;
        }

        if ($data['halamanaktif'] < ($data['jumlahpagination'] - $jumlahlink)) {
            $data['end'] = $data['halamanaktif'] + $jumlahlink;
        } else {
            $data['end'] = $data['jumlahpagination'];
        }


        $data['user'] = $this->model('UserModel')->getuserData();
        $data['history'] = $this->model('postModel')->getAllHistory($dataawal, $jumlahdata);
        $data['profile'] = $this->model('UserModel')->getprofile();
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/aktivitas-user', $data);
        $this->view('adminComp/footer');
    }

    public function cariAktivitas()
    {
        if (isset($_POST['tombolCari'])) {
            $cari = $_POST['cari'];
            $_SESSION['cari'] = $cari;
        } else {
            $cari = $_SESSION['cari'];
        }
        $jumlahdata = 5;

        $data['halamanaktif'] = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $dataawal = ($data['halamanaktif'] * $jumlahdata) - $jumlahdata;
        if ($_SESSION['cari'] == '') {
            $data['historycount'] = $this->model('postModel')->getHistoryCount();
        } else {
            $data['historycount'] = $this->model('postModel')->getHistoryCountSearch();
        }

        $data['jumlahpagination'] = ceil($data['historycount'] / $jumlahdata);
        $jumlahlink = 3;
        if ($data['halamanaktif'] > $jumlahlink) {
            $data['start'] = $data['halamanaktif'] - $jumlahlink;
        } else {
            $data['start'] = 1;
        }

        if ($data['halamanaktif'] < ($data['jumlahpagination'] - $jumlahlink)) {
            $data['end'] = $data['halamanaktif'] + $jumlahlink;
        } else {
            $data['end'] = $data['jumlahpagination'];
        }

        $data['user'] = $this->model('UserModel')->getuserData();
        $data['profile'] = $this->model('UserModel')->getprofile();

        if ($_SESSION['cari'] == '') {
            $data['history'] = $this->model('postModel')->getAllHistory($dataawal, $jumlahdata);
        } else {
            $data['history'] = $this->model('postModel')->getData($dataawal, $jumlahdata);
        }
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/aktivitas-user', $data);
        $this->view('adminComp/footer');
    }

    public function my_profile()
    {

        $data['user'] = $this->model('UserModel')->getuserData();
        $data['profile'] = $this->model('UserModel')->getprofile();
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/profile', $data);
        $this->view('adminComp/footer');
    }

    public function editProfile()
    {
        if ($this->model('userModel')->profilUbah($_POST) > 0) {
            $_SESSION['suksesedit'] = true;
            header('Location:' . URL . '/Home/my_profile');
        } else {
            header('Location:' . URL . '/Home/my_profile');
            $_SESSION['gagaledit'] = true;
        }
    }

    public function ubahpass()
    {
        if ($this->model('userModel')->passwordUbah($_POST) > 0) {
            header('Location:' . URL . '/log');
            session_destroy();
            session_unset();
        } else {
            header('Location:' . URL . '/Home/my_profile');
            $_SESSION['gagalubahPass'] = true;
        }
    }

    public function ubahUserpass()
    {
        if ($this->model('userModel')->passwordUserUbah($_POST) > 0) {
            $_SESSION['suksesubahPass'] = true;
            header('Location:' . URL . '/Home/edituserpage/' . base64_encode($_POST['userid']));
        } else {
            header('Location:' . URL . '/Home/edituserpage/' . base64_encode($_POST['userid']));
            $_SESSION['gagalubahPass'] = true;
        }
    }

    public function edituserpage($id)
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['profile'] = $this->model('UserModel')->getprofile();
        $data['userid'] = $this->model('UserModel')->getbyId($id);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/user-edit', $data);
        $this->view('adminComp/footer');
    }

    public function editUser()
    {
        if ($this->model('userModel')->ubahUser($_POST) > 0) {
            $_SESSION['suksesedit'] = true;
            header('Location:' . URL . '/Home/edituserpage/' . base64_encode($_POST['userid']));
        } else {
            $_SESSION['gagaledit'] = true;
            header('Location:' . URL . '/Home/edituserpage/' . base64_encode($_POST['userid']));
        }
    }

    public function cariAct()
    {
    }

    // tambah user
    public function userAdd()
    {

        if ($this->model('userModel')->tambahUser($_POST) > 0) {
            $_SESSION['suksesadd'] = true;
            header('Location:' . URL . '/Home/kelola_user');
        } else {
            header('Location:' . URL . '/Home/kelola_user');
            $_SESSION['gagaladd'] = true;
        }
    }

    public function editorimages($id)
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('UserModel')->getbyId($id);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbarPost', $data);
        $this->view('home/editorP', $data);
        $this->view('adminComp/footer');
    }

    public function user_dashboard($id = '')
    {

        $data['user'] = $this->model('UserModel')->getuserData();
        $data['jumlahFolder'] = $this->model('folderModel')->getFolderCountbyId($id);
        $data['jumlahGambar'] = $this->model('postModel')->jumlahGambarUser($id);
        $data['jumlahVideo'] = $this->model('postModel')->jumlahVideoUser($id);
        $data['jumlahAudio'] = $this->model('postModel')->jumlahAudioUser($id);
        $data['userid'] = $this->model('UserModel')->getbyId($id);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbarPost', $data);
        $this->view('home/user-dashboard', $data);
        $this->view('adminComp/footer');
    }

    public function delete()
    {
        if ($this->model('UserModel')->hapusData($_POST) > 0) {
            $_SESSION['berhasilhapus'] = true;
            header('Location:' . URL . '/Home/kelola_user');
        }
    }

    public function user_folder($id = '')
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('UserModel')->getbyId($id);

        if ($data['userid']['peran'] !== 'footager') {
            header('Location:' . URL . '/Home');
        }
        $data['folder'] = $this->model('folderModel')->getUserFolder($id);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbarPost', $data);
        $this->view('home/user-folder', $data);
        $this->view('adminComp/footer');
    }

    public function user_Image($id = '')
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('UserModel')->getbyId($id);

        $data['gambarUser'] = $this->model('postModel')->getUserImage($id);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbarPost', $data);
        $this->view('home/user-image', $data);
        $this->view('adminComp/footer');
    }

    public function user_Video($id = '')
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('UserModel')->getbyId($id);

        $data['videoUser'] = $this->model('postModel')->getUserVideo($id);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbarPost', $data);
        $this->view('home/user-video', $data);
        $this->view('adminComp/footer');
    }

    public function user_VideoAkhir($id = '')
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('UserModel')->getbyId($id);

        $data['videoUser'] = $this->model('postModel')->getUserVideo($id);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbarPost', $data);
        $this->view('home/user-video-akhir', $data);
        $this->view('adminComp/footer');
    }

    public function user_Audio($id = '')
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('UserModel')->getbyId($id);

        $data['audioUser'] = $this->model('postModel')->getUserAudio($id);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbarPost', $data);
        $this->view('home/user-audio', $data);
        $this->view('adminComp/footer');
    }

    public function user_folderimage()
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('folderModel')->getaccountNames($_POST);

        if ($data['userid']['peran'] !== 'footager') {
            header('Location:' . URL . '/Home');
        }

        $data['profile'] = $this->model('UserModel')->getprofile();

        $data['folderinfo'] = $this->model('folderModel')->getFolderinfor($_POST);
        $data['getImage'] = $this->model('folderModel')->getfolderImage($_POST);
        $this->view('adminComp/header', $data);
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/user-fimage', $data);
        $this->view('adminComp/footer');
    }

    public function user_foldervideo()
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('folderModel')->getaccountNames($_POST);


        if ($data['userid']['peran'] !== 'footager') {
            header('Location:' . URL . '/Home');
        }
        $data['profile'] = $this->model('UserModel')->getprofile();
        $data['folderinfo'] = $this->model('folderModel')->getFolderinfor($_POST);
        $data['getVideo'] = $this->model('folderModel')->getfolderVideo($_POST);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/user-fvideo', $data);
        $this->view('adminComp/footer');
    }

    public function user_folderaudio()
    {
        $data['user'] = $this->model('UserModel')->getuserData();
        $data['userid'] = $this->model('folderModel')->getaccountNames($_POST);
        $data['profile'] = $this->model('UserModel')->getprofile();

        if ($data['userid']['peran'] !== 'footager') {
            header('Location:' . URL . '/Home');
        }


        $data['folderinfo'] = $this->model('folderModel')->getFolderinfor($_POST);
        $data['getAudio'] = $this->model('folderModel')->getfolderAudio($_POST);
        $this->view('adminComp/header');
        $this->view('adminComp/sidebar', $data);
        $this->view('adminComp/navbar', $data);
        $this->view('home/user-faudio', $data);
        $this->view('adminComp/footer');
    }


    public function downloadImage()
    {
        $this->model('postModel')->downloadImg();
    }


    public function logout()
    {
        $data['logout'] = $this->model('UserModel')->logout();
        header('Location:' . URL . '/Log');
    }
}
