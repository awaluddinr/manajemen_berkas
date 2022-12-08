<?php



class User extends Controller
{

    public function index()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: ' . URL . '/Log');
        } else {
            if ($_SESSION['peran'] !== 'editor' && $_SESSION['peran'] !== 'footager') {
                header('Location: ' . URL . '/Home');
            }
        }
        $data['jumlahFolder'] = $this->model('folderModel')->jumlahFolderUser();
        $data['jumlahGambar'] = $this->model('postModel')->jumlahGambar();
        $data['jumlahVideo'] = $this->model('postModel')->jumlahVideo();
        $data['jumlahAudio'] = $this->model('postModel')->jumlahAudio();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/Dashboard', $data);
        $this->view('userComp/footer');
    }

    public function folder_create()
    {
        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }

        $jumlahdata = 21;
        $data['halamanaktif'] = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $dataawal = ($data['halamanaktif'] * $jumlahdata) - $jumlahdata;
        if (isset($_SESSION['cari']) && !empty($_SESSION['cari'])) {
            $data['folder'] = $this->model('folderModel')->tampilFolderCari($dataawal, $jumlahdata);
            $data['foldercount'] = $this->model('folderModel')->getfolderCountSearch();
        } else {
            $data['folder'] = $this->model('folderModel')->tampilFolder($dataawal, $jumlahdata);
            $data['foldercount'] = $this->model('folderModel')->jumlahFolderUser();
            unset($_SESSION['cari']);
        }
        // $data['foldercount'] = $this->model('folderModel')->jumlahFolderUser();
        $data['jumlahpagination'] = ceil($data['foldercount'] / $jumlahdata);

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


        // $data['folder'] = $this->model('folderModel')->tampilFolder($dataawal, $jumlahdata);
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/folder-create', $data);
        $this->view('userComp/footer');
    }

    public function folder_search()
    {
        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }

        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }


        if (isset($_POST['tombolCari'])) {
            $cari = $_POST['cari'];
            $_SESSION['cari'] = $cari;
        } else {
            $cari = $_SESSION['cari'];
        }
        $jumlahdata = 21;

        $data['halamanaktif'] = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $dataawal = ($data['halamanaktif'] * $jumlahdata) - $jumlahdata;
        if (!isset($_SESSION['cari']) && empty($_SESSION['cari'])) {
            $data['folder'] = $this->model('folderModel')->tampilFolder($dataawal, $jumlahdata);
            $data['foldercount'] = $this->model('folderModel')->jumlahFolderUser();
        } else {
            $data['folder'] = $this->model('folderModel')->tampilFolderCari($dataawal, $jumlahdata);
            $data['foldercount'] = $this->model('folderModel')->getfolderCountSearch();
        }
        $data['jumlahpagination'] = ceil($data['foldercount'] / $jumlahdata);
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
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/folder-create', $data);
        $this->view('userComp/footer');
    }

    public function imageview($id = '')
    {

        if (empty($id)) {
            header('Location: ' . URL . '/User/folder_create');
        }

        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }

        $data['folderId'] = $this->model('folderModel')->getFolderbyId($id);
        $data['files'] = $this->model('folderModel')->showFiles($id);
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/fimage-view', $data);
        $this->view('userComp/footer');
    }

    public function imageview_search($id = '')
    {

        if (empty($id)) {
            header('Location: ' . URL . '/User/folder_create');
        }

        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }

        $data['folderId'] = $this->model('folderModel')->getFolderbyId($id);
        $data['files'] = $this->model('folderModel')->showFiles_img($id);
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/fimage-view', $data);
        $this->view('userComp/footer');
    }

    public function videoview($id = '')
    {
        if (empty($id)) {
            header('Location: ' . URL . '/User/folder_create');
        }

        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }

        $data['folderId'] = $this->model('folderModel')->getFolderbyId($id);
        $data['files'] = $this->model('folderModel')->showFiles($id);
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/fvideo-view', $data);
        $this->view('userComp/footer');
    }

    public function videoview_search($id = '')
    {
        if (empty($id)) {
            header('Location: ' . URL . '/User/folder_create');
        }

        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }


        $data['folderId'] = $this->model('folderModel')->getFolderbyId($id);
        $data['files'] = $this->model('folderModel')->showFiles_vid($id);
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/fvideo-view', $data);
        $this->view('userComp/footer');
    }

    public function audioview($id = '')
    {
        if (empty($id)) {
            header('Location: ' . URL . '/User/folder_create');
        }

        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }

        $data['folderId'] = $this->model('folderModel')->getFolderbyId($id);
        $data['files'] = $this->model('folderModel')->showFiles($id);
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/faudio-view', $data);
        $this->view('userComp/footer');
    }

    public function audioview_search($id = '')
    {
        if (empty($id)) {
            header('Location: ' . URL . '/User/folder_create');
        }

        if ($_SESSION['peran'] != 'footager') {
            header('Location: ' . URL . '/User');
        }


        $data['folderId'] = $this->model('folderModel')->getFolderbyId($id);
        $data['files'] = $this->model('folderModel')->showFiles_aud($id);
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/faudio-view', $data);
        $this->view('userComp/footer');
    }

    public function multipleFiles()
    {
        $this->model('postModel')->folderPost($_POST);
    }

    // public function rekapUpload()
    // {
    //     $this->model('postModel')->recapVideo($_FILES);
    // }

    public function pageImage()
    {

        $data['imageShow'] = $this->model('postModel')->imageShow();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/image', $data);
        $this->view('userComp/footer');
    }

    public function pageImage_search()
    {
        $data['imageShow'] = $this->model('postModel')->imageSearch($_POST);
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/image', $data);
        $this->view('userComp/footer');
    }

    public function pageVideo()
    {
        $data['videoShow'] = $this->model('postModel')->videoShow();
        $data['mainVideo'] = $this->model('postModel')->mainVideo();
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/video', $data);
        $this->view('userComp/footer');
    }

    public function pageVideo_search()
    {
        $data['videoShow'] = $this->model('postModel')->videoSearch($_POST);
        $data['mainVideo'] = $this->model('postModel')->mainVideo();
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/video', $data);
        $this->view('userComp/footer');
    }

    public function pageAudio()
    {
        $data['audioShow'] = $this->model('postModel')->audioShow();
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/audio', $data);
        $this->view('userComp/footer');
    }

    public function pageAudio_search()
    {
        $data['audioShow'] = $this->model('postModel')->audioSearch($_POST);
        $data['folder'] = $this->model('postModel')->folder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/audio', $data);
        $this->view('userComp/footer');
    }

    public function trash()
    {
        if (isset($_SESSION['hapus'])) {
            unset($_SESSION['hapus']);
        }
        $data['trashShow'] = $this->model('postModel')->trashShow();
        $data['trashFolder'] = $this->model('folderModel')->trashfolder();
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/trash', $data);
        $this->view('userComp/footer');
    }

    public function userfolder()
    {


        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['folderuser'] = $this->model('folderModel')->getFolderUser($_POST);
        $data['Getuser'] = $this->model('UserModel')->getUserById($_POST);

        if ($data['Getuser']['peran'] == '') {
            header('Location: ' . URL . '/User');
        }

        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/folder-user', $data);
        $this->view('userComp/footer');
    }

    public function userimage()
    {

        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $data['folderuser'] = $this->model('folderModel')->getFolderUser($_POST);
        $data['Getuser'] = $this->model('UserModel')->getUserById($_POST);
        $data['getImage'] = $this->model('postModel')->getImagebyId($_POST);
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/image-user', $data);
        $this->view('userComp/footer');
    }

    public function uservideo()
    {
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $data['folderuser'] = $this->model('folderModel')->getFolderUser($_POST);
        $data['Getuser'] = $this->model('UserModel')->getUserById($_POST);
        $data['getVideo'] = $this->model('postModel')->getVideobyId($_POST);
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/video-user', $data);
        $this->view('userComp/footer');
    }

    public function useraudio()
    {

        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $data['folderuser'] = $this->model('folderModel')->getFolderUser($_POST);
        $data['Getuser'] = $this->model('UserModel')->getUserById($_POST);
        $data['getAudio'] = $this->model('postModel')->getAudiobyId($_POST);
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/audio-user', $data);
        $this->view('userComp/footer');
    }

    public function userfolder_image()
    {
        if (!isset($_POST['idFolder'])) {
            header('Location: ' . URL . '/user/userfolder/');
        }
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $data['folderinfo'] = $this->model('folderModel')->getFolderinfor($_POST);
        $data['getImage'] = $this->model('folderModel')->getfolderImage($_POST);
        $data['Getuser'] = $this->model('folderModel')->getaccountName($_POST);
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/fimage-user', $data);
        $this->view('userComp/footer');
    }

    public function userfolder_video()
    {
        if (!isset($_POST['idFolder'])) {
            header('Location: ' . URL . '/user/userfolder/');
        }
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $data['folderinfo'] = $this->model('folderModel')->getFolderinfo($_POST);
        $data['getVideo'] = $this->model('folderModel')->getfolderVideo($_POST);
        $data['Getuser'] = $this->model('folderModel')->getaccountName($_POST);
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/fvideo-user', $data);
        $this->view('userComp/footer');
    }

    public function userfolder_audio()
    {
        if (!isset($_POST['idFolder'])) {
            header('Location: ' . URL . '/user/userfolder/');
        }
        $data['jumlahUploader'] = $this->model('postModel')->getUploader();
        $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
        $data['folderinfo'] = $this->model('folderModel')->getFolderinfo($_POST);
        $data['getAudio'] = $this->model('folderModel')->getfolderAudio($_POST);
        $data['Getuser'] = $this->model('folderModel')->getaccountName($_POST);
        $this->view('userComp/header');
        $this->view('userComp/titlebar');
        $this->view('userComp/navbar', $data);
        $this->view('pengguna/faudio-user', $data);
        $this->view('userComp/footer');
    }

    public function rekap_video()
    {

        if ($_SESSION['peran'] != 'editor') {
            $this->view('userComp/header');
            $this->view('pengguna/error');
            $this->view('userComp/footer');
        } else {
            $data['jumlahUploader'] = $this->model('postModel')->getUploader();
            $data['videoAkhir'] = $this->model('postModel')->getVideoPost();
            $data['jumlahuser'] = $this->model('postModel')->getUsereditor();
            $this->view('userComp/header');
            $this->view('userComp/titlebar');
            $this->view('userComp/navbar', $data);
            $this->view('pengguna/rekap-video', $data);
            $this->view('userComp/footer');
        }
    }



    // public function rekap_show()
    // {
    //     $data['img'] = $this->model('postModel')->getVideoPost();
    //     $result_array = [];
    //     $output = '';
    //     if (count($data['img']) > 0) {


    //         foreach ($data['img'] as $row) {
    //             $target_path = 'assets/media/img/' . $row['namaVideo'];
    //             // $output .= '<video controls src="' . URL . '/' . $target_path . '" width="300" height="225"></video>';
    //             $output .=  '<video class ="mr-5" controls width="280" height="225">
    //                         <source src="' . URL . '/' . $target_path . '"  type="video/mp4">
    //                         </video>';
    //         }
    //     } else {
    //         $output .= 'data kosong';
    //     }
    //     echo $output;
    // }

    public function addImage()
    {
        if ($this->model('postModel')->imageAdd($_FILES) > 0) {
            header('Location:' . URL . '/User/pageImage');
        } else {
            header('Location:' . URL . '/User/pageImage');
        }
    }

    public function addVid()
    {
        if ($this->model('postModel')->uploadVid($_FILES) > 0) {
            header('Location:' . URL . '/User/pageVideo');
        } else {
            header('Location:' . URL . '/User/pageVideo');
        }
    }

    public function rekapupload()
    {
        if ($this->model('postModel')->rekapAdd($_FILES) > 0) {
            header('Location:' . URL . '/User/rekap_video');
        } else {
            header('Location:' . URL . '/User/rekap_video');
        }
    }

    public function addAudio()
    {
        if ($this->model('postModel')->uploadAud($_FILES) > 0) {
            $_SESSION['sukses'] = "Data Berhasil Ditambahkan";
            header('Location:' . URL . '/User/pageAudio');
        } else {
            header('Location:' . URL . '/User/pageAudio');
        }
    }

    public function hapusGambar()
    {
        if ($this->model('postModel')->deleteImage($_POST) > 0) {
            $_SESSION['suksesImgdel'] = true;
            header('Location:' . URL . '/User/pageImage');
        } else {
            header('Location:' . URL . '/User/pageImage');
        }
    }

    public function hapusFGambar()
    {
        $folderId = $_POST['folderId'];
        if ($this->model('postModel')->deleteFImage($_POST) > 0) {
            $_SESSION['suksesImgdel'] = true;
            header('Location:' . URL . '/User/imageview/' . $folderId);
        } else {
            header('Location:' . URL . '/User/imageview/' . $folderId);
        }
    }

    public function hapusFvideo()
    {
        $folderId = $_POST['idfolderVid'];
        if ($this->model('postModel')->deleteFvideo($_POST) > 0) {
            $_SESSION['suksesViddel'] = true;
            header('Location:' . URL . '/User/videoview/' . $folderId);
        } else {
            header('Location:' . URL . '/User/videoview/' . $folderId);
        }
    }

    public function hapusFaudio()
    {
        $folderId = $_POST['audfolid'];
        if ($this->model('postModel')->deleteFaudio($_POST) > 0) {
            $_SESSION['suksesAuddel'] = true;
            header('Location:' . URL . '/User/audioview/' . $folderId);
        } else {
            header('Location:' . URL . '/User/audioview/' . $folderId);
        }
    }

    public function hapusVideo()
    {
        if ($this->model('postModel')->deleteVideo($_POST) > 0) {
            $_SESSION['suksesViddel'] = true;
            header('Location:' . URL . '/User/pageVideo');
        } else {
            header('Location:' . URL . '/User/pageVideo');
        }
    }

    public function hapusVideoAkhir()
    {
        if ($this->model('postModel')->deleteVideoAkhir($_POST) > 0) {
            $_SESSION['suksesViddel'] = true;
            header('Location:' . URL . '/User/rekap_video');
        } else {
            header('Location:' . URL . '/User/rekap_video');
        }
    }

    public function hapusAudio()
    {
        if ($this->model('postModel')->deleteAudio($_POST) > 0) {
            $_SESSION['suksesAuddel'] = true;
            header('Location:' . URL . '/User/pageAudio');
        } else {
            header('Location:' . URL . '/User/pageAudio');
        }
    }

    public function delPerm()
    {
        if ($this->model('postModel')->deleteImage($_POST) > 0) {
            header('Location:' . URL . '/User/trash');
        } else {
            header('Location:' . URL . '/User/trash');
        }
    }

    public function hapusTemp()
    {
        if ($this->model('postModel')->hapusPrank($_POST) > 0) {
            $_SESSION['sampah'] = true;
            header('Location:' . URL . '/User/pageImage');
        } else {
            header('Location:' . URL . '/User/pageImage');
        }
    }

    public function hapusfilesImgTemp()
    {
        $id = $_POST['noFolder'];
        if ($this->model('postModel')->hapusPrank($_POST) > 0) {
            $_SESSION['sampah'] = true;
            header('Location:' . URL . '/User/imageview/' . $id);
        } else {
            header('Location:' . URL . '/User/imageview/' . $id);
        }
    }

    public function hapusfilesVidTemp()
    {
        $id = $_POST['noFolder'];
        if ($this->model('postModel')->hapusPrank($_POST) > 0) {
            $_SESSION['sampah'] = true;
            header('Location:' . URL . '/User/videoview/' . $id);
        } else {
            header('Location:' . URL . '/User/videoview/' . $id);
        }
    }

    public function hapusfilesAudTemp()
    {
        $id = $_POST['noFolder'];
        if ($this->model('postModel')->hapusPrank($_POST) > 0) {
            $_SESSION['sampah'] = true;
            header('Location:' . URL . '/User/audioview/' . $id);
        } else {
            header('Location:' . URL . '/User/audioview/' . $id);
        }
    }

    public function VidhapusTemp()
    {
        if ($this->model('postModel')->hapusPrank($_POST) > 0) {
            $_SESSION['sampah'] = true;
            header('Location:' . URL . '/User/pageVideo');
        } else {
            header('Location:' . URL . '/User/pageVideo');
        }
    }

    public function AudhapusTemp()
    {
        if ($this->model('postModel')->hapusPrank($_POST) > 0) {
            $_SESSION['sampah'] = true;
            header('Location:' . URL . '/User/pageAudio');
        } else {
            header('Location:' . URL . '/User/pageAudio');
        }
    }

    public function hapusfoldertemp()
    {
        if ($this->model('folderModel')->delfoldertemp($_POST) > 0) {
            header('Location:' . URL . '/User/folder_create');
            $_SESSION['sampah'] = true;
        } else {
            header('Location:' . URL . '/User/folder_create');
        }
    }

    public function hapusFolder()
    {
        if ($this->model('folderModel')->folderDel($_POST) > 0) {
            header('Location:' . URL . '/User/folder_create');
            $_SESSION['folder'] = true;
        } else {
            header('Location:' . URL . '/User/folder_create');
        }
    }

    public function hapusFolderTrash()
    {
        if ($this->model('folderModel')->folderDel($_POST) > 0) {
            $_SESSION['hapusfoldertrash'] = true;
            header('Location:' . URL . '/User/trash');
        } else {
            header('Location:' . URL . '/User/trash');
        }
    }

    public function hapusFiles()
    {
        if ($this->model('postModel')->filesDel($_POST) > 0) {
            $_SESSION['filesHapus'] = true;
            header('Location:' . URL . '/User/trash');
        } else {
            header('Location:' . URL . '/User/trash');
        }
    }

    public function hapusFilesFolder()
    {
        if ($this->model('postModel')->filesFolderDel($_POST) > 0) {
            $_SESSION['filesHapus'] = true;
            header('Location:' . URL . '/User/trash');
        } else {
            header('Location:' . URL . '/User/trash');
        }
    }

    public function restore($id)
    {
        if ($this->model('postModel')->recovery($id) > 0) {
            $_SESSION['pulih'] = true;
            header('Location:' . URL . '/User/trash');
        } else {
            header('Location:' . URL . '/User/trash');
        }
    }

    public function pulihfolder($id)
    {
        if ($this->model('folderModel')->recoveryFolder($id) > 0) {
            $_SESSION['pulih'] = true;
            header('Location:' . URL . '/User/trash');
        } else {
            header('Location:' . URL . '/User/trash');
        }
    }

    public function editFolder()
    {
        if ($this->model('folderModel')->folderUbah($_POST) > 0) {
            header('Location:' . URL . '/User/folder_create');
            $_SESSION['edit'] = true;
        } else {
            header('Location: ' . URL . '/User/folder_create');
            $_SESSION['editgagal'] = true;
        }
    }

    public function editGambar()
    {
        if ($this->model('postModel')->ubahGambar($_POST) > 0) {
            $_SESSION['sukseseditImg'] = true;
            header('Location:' . URL . '/User/pageImage');
        } else {
            $_SESSION['gagaleditImg'] = true;
            header('Location:' . URL . '/User/pageImage');
        }
    }

    public function editFgambar()
    {
        $folderId = $_POST['fdrId'];
        if ($this->model('postModel')->ubahFgambar($_POST) > 0) {
            $_SESSION['sukseseditImg'] = true;
            header('Location:' . URL . '/User/imageview/' . $folderId);
        } else {
            $_SESSION['gagaleditImg'] = true;
            header('Location:' . URL . '/User/imageview/' . $folderId);
        }
    }

    public function editVideo()
    {
        if ($this->model('postModel')->ubahVideo($_POST) > 0) {
            $_SESSION['sukseseditVid'] = true;
            header('Location:' . URL . '/User/pageVideo');
        } else {
            $_SESSION['gagaleditVid'] = true;
            header('Location:' . URL . '/User/pageVideo');
        }
    }

    public function editVideoAkhir()
    {
        if ($this->model('postModel')->ubahVideoAkhir($_POST) > 0) {
            $_SESSION['sukseseditVid'] = true;
            header('Location:' . URL . '/User/rekap_video');
        } else {
            $_SESSION['gagaleditVid'] = true;
            header('Location:' . URL . '/User/rekap_video');
        }
    }

    public function editFVideo()
    {
        $folderId = $_POST['fdrId'];
        if ($this->model('postModel')->ubahFVideo($_POST) > 0) {
            $_SESSION['sukseseditVid'] = true;
            header('Location:' . URL . '/User/videoview/' . $folderId);
        } else {
            $_SESSION['gagaleditVid'] = true;
            header('Location:' . URL . '/User/videoview/' . $folderId);
        }
    }

    public function editAudio()
    {
        if ($this->model('postModel')->ubahAudio($_POST) > 0) {
            $_SESSION['sukseseditAud'] = true;
            header('Location:' . URL . '/User/pageAudio');
        } else {
            $_SESSION['gagaleditAud'] = true;
            header('Location:' . URL . '/User/pageAudio');
        }
    }

    public function editFAudio()
    {
        $folderId = $_POST['idfolderAud'];
        if ($this->model('postModel')->ubahFAudio($_POST) > 0) {
            $_SESSION['sukseseditAud'] = true;
            header('Location:' . URL . '/User/audioview/' . $folderId);
        } else {
            $_SESSION['gagaleditAud'] = true;
            header('Location:' . URL . '/User/audioview/' . $folderId);
        }
    }

    public function downloadImage()
    {
        $this->model('postModel')->downloadImg();
    }

    public function downloadImages()
    {
        $this->model('postModel')->downloadImgs();
    }


    public function downloadImageById()
    {
        $this->model('postModel')->downloadImgById($_POST);
    }

    public function downloadVideoById()
    {
        $this->model('postModel')->downloadVidById($_POST);
    }

    public function downloadAudioById()
    {
        $this->model('postModel')->downloadAudById($_POST);
    }

    public function downloadfolderImage()
    {
        $this->model('postModel')->downloadImgFolder($_POST);
    }

    public function downloadfolderVideo()
    {
        $this->model('postModel')->downloadVidFolder($_POST);
    }

    public function downloadfolderAudio()
    {
        $this->model('postModel')->downloadAudFolder($_POST);
    }


    public function downloadVideo()
    {
        $this->model('postModel')->downloadVid();
    }

    public function downloadVideos()
    {
        $this->model('postModel')->downloadVids();
    }

    public function downloadAudio()
    {
        $this->model('postModel')->downloadAud();
    }

    public function downloadAudios()
    {
        $this->model('postModel')->downloadAuds();
    }

    public function downloadZip()
    {
        $this->model('folderModel')->zipDownload();
    }

    public function downloadZipById()
    {
        $this->model('folderModel')->zipDownloadById($_POST);
    }

    public function logout()
    {
        $data['logout'] = $this->model('UserModel')->logout();
        header('Location:' . URL . '/Log');
    }

    public function CreateF()
    {
        $nama = str_replace(" ", "", rtrim($_POST['folderName']));
        if ($this->model('folderModel')->Createfolder($_POST) > 0) {
            $_SESSION['suksesfolder'] = true;
            mkdir('assets/media/' . $_SESSION['loginData']['nama'] . '/' . $nama);
            header('Location: ' . URL . '/User/folder_create');
        } else {
            header('Location: ' . URL . '/User/folder_create');
            $_SESSION['gagalfolder'] = true;
        }
    }
}
