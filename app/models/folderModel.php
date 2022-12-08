<?php


class folderModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function Createfolder($data)
    {

        $this->db->query("SELECT * FROM folder WHERE namaFolder = :namaFolder AND id_user =" . $_SESSION['loginData']['id']);

        $this->db->bind('namaFolder', str_replace(" ", "", rtrim($data['folderName'])));

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaFolder'] = $data['folderName'];
            return false;
        }

        date_default_timezone_set('Asia/makassar');
        $now = date('Y-m-d H:i:s');

        $query = "INSERT INTO folder VALUES ('',:namaFolder,:infoFolder,:tanggal,:id_user,:delete_at)";
        $this->db->query($query);

        $this->db->bind('namaFolder', str_replace(" ", "", rtrim($data['folderName'])));
        $this->db->bind('infoFolder', rtrim($data['folderName']));
        $this->db->bind('tanggal', $now);
        $this->db->bind('id_user', $_SESSION['loginData']['id']);
        $this->db->bind('delete_at', null);

        $this->db->execute();

        // mkdir("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $data['folderName']);

        return $this->db->rowCount();
    }

    public function tampilFolder($dataawal, $jumlahdata)
    {
        $this->db->query("SELECT * FROM folder WHERE id_user =:id_user AND delete_at IS NULL LIMIT $dataawal, $jumlahdata");

        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function jumlahFolderUser()
    {
        $query = "SELECT * FROM folder WHERE delete_at IS NULL AND id_user = " . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function folderAllUser()
    {
        $query = "SELECT * FROM folder WHERE delete_at IS NULL";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function getFolderCountbyId($id)
    {

        $query = "SELECT * FROM folder WHERE id_user =" . base64_decode($id) . " AND delete_at IS NULL ";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function getUserFolder($id)
    {
        $query = "SELECT * FROM folder WHERE id_user =" . base64_decode($id) . " AND delete_at IS NULL";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getFolderbyId($id)
    {

        $this->db->query('SELECT * FROM folder WHERE id=:id AND id_user =' . $_SESSION['loginData']['id']);

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function showFiles($id)
    {
        $query = "SELECT * FROM files WHERE folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'] . " AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->bind('folderId', $id);

        return $this->db->resultSet();
    }

    public function showFiles_img($id)
    {
        $cari = $_POST['cari'];
        $query = "SELECT * FROM files WHERE info LIKE :cari AND ekstensi IN ('jpg','png','jpeg','gif','tiff') AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'] . " AND delete_at IS NULL";

        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        $this->db->bind('folderId', $id);

        return $this->db->resultSet();
    }

    public function showFiles_vid($id)
    {
        $cari = $_POST['cari'];
        $query = "SELECT * FROM files WHERE info LIKE :cari AND ekstensi IN ('mp4','MOV','MTS','mkv','avi','3gp') AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'] . " AND delete_at IS NULL";

        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        $this->db->bind('folderId', $id);

        return $this->db->resultSet();
    }

    public function showFiles_aud($id)
    {
        $cari = $_POST['cari'];
        $query = "SELECT * FROM files WHERE info LIKE :cari AND ekstensi IN ('mp3','aac','wav','wma','pcm','flac','aicc','ogg') AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'] . " AND delete_at IS NULL";

        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        $this->db->bind('folderId', $id);

        return $this->db->resultSet();
    }

    public function img($id)
    {
        $id = $_POST['idFolder'];

        $data = $this->getFolderbyId($id);

        $dt = $data['namaFolder'];

        $dir = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $dt . '/';

        $folder =  BASEURL . '/media/' . $_SESSION['loginData']['nama'] . '/' . $dt . '/';
        // $data = scandir('assets/media/' . $_SESSION['loginData']['nama'] . '/' . $data['folderId']['namaFolder'] . '/');

        $output = '<div class="col-xl-12">';
        if (false !== $dir) {
            foreach (scandir($dir) as $item) {
                if ('.' !== $item && '..' !== $item) {
                    $output .= '<div class="mb-0">
                <img src="' . $folder . $item . '" alt="" width="100">
            </div>';
                }
            }
        }
        $output .= '</div>';

        return $output;
    }

    public function zipDownload()
    {
        $zip = new ZipArchive();
        $nama = $_POST['zipDownload'];
        $filename = $nama . ".zip";

        if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
            exit("cannot open <$filename>\n");
        }

        $folder = opendir("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $nama . "/");

        // check directory
        if ($folder) {
            while (false !== ($files = readdir($folder))) {
                if ($files !== "." && $files !== "..") {
                    $path = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $nama . '/' . $files;
                    $zip->addFile($path, $files);
                }
            }
            closedir($folder);
        }

        $zip->close();

        if (file_exists($filename)) {
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
            header('Content-Length: ' . filesize($filename));

            flush();
            readfile($filename);
            // delete file
            unlink($filename);
        } else {
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
            header('Content-Length: ' . filesize($filename));

            flush();
            readfile($filename);
            // delete file
            unlink($filename);
        }
    }

    public function zipDownloadById($data)
    {
        $id = $data['idDownload'];
        $user = $data['user'];
        $namaF = $data['zipDownload'];

        $q = "SELECT * FROM user WHERE id = :id";

        $this->db->query($q);

        $this->db->bind('id', $user);

        $a = $this->db->single();

        $b = $a['nama'];

        $query = "SELECT * FROM folder WHERE id = :id AND id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('id_user', $user);

        $namaFolder =  $this->db->single();
        // $nama = $namaFolder['namaFolder'];

        $zip = new ZipArchive();
        $nama = $namaFolder['namaFolder'];
        $filename = $nama . ".zip";
        // echo $filename;
        // die;

        if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
            exit("cannot open <$filename>\n");
        }

        $folder = opendir("assets/media/" . $b . "/" . $nama . "/");


        // check directory
        if ($folder) {
            while (false !== ($files = readdir($folder))) {
                if ($files !== "." && $files !== "..") {
                    $path = 'assets/media/' . $b . '/' . $nama . '/' . $files;
                    $zip->addFile($path, $files);
                }
            }
            closedir($folder);
        }

        $zip->close();

        if (file_exists($filename)) {
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
            header('Content-Length: ' . filesize($filename));

            flush();
            readfile($filename);
            // delete file
            unlink($filename);
        } else {
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
            header('Content-Length: ' . filesize($filename));

            flush();
            readfile($filename);
            // delete file
            unlink($filename);
        }
    }

    public function folderDel($id)
    {
        $id = $_POST['folderId'];

        $query = "SELECT * FROM folder WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $data = $this->db->single();

        $folder = $data['namaFolder'];

        if (file_exists('assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder)) {
            $files = scandir('assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder);
            foreach ($files as $file) {
                if ($file === '.' or $file === '..') {
                    continue;
                } else {
                    unlink('assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder . '/' . $file);
                }
            }
            rmdir('assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder);
        }

        $query = "DELETE FROM folder WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function folderUbah($data)
    {
        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $id = $_POST['editId'];

        $this->db->query("SELECT * FROM folder WHERE namaFolder = :namaFolder AND id != :id AND id_user =" . $_SESSION['loginData']['id']);

        $this->db->bind('namaFolder',  str_replace(" ", "", rtrim($data['editFolder'])));
        $this->db->bind('id', $id);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['folderada'] = $data['editFolder'];
            $_SESSION['folderadaId'] = $id;
            return false;
            exit(0);
        } else {
            $query = "SELECT * FROM folder WHERE id = :id AND id_user=" . $_SESSION['loginData']['id'];

            $this->db->query($query);

            $this->db->bind('id', $id);

            $folder = $this->db->single();

            $dir = $folder['namaFolder'];

            $folderInfo = $folder['infoFolder'];

            $nwname = str_replace(" ", "", rtrim($data['editFolder']));

            $direk = $nwname;

            $oldname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $dir;
            $newname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $nwname;
            rename($oldname, $newname);

            $query = "UPDATE files SET dir = :dir WHERE folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'];
            $this->db->query($query);
            $this->db->bind('dir', $direk);
            $this->db->bind('folderId', $id);
            $this->db->execute();

            $p = "<i class='icon-folder text-warning mr-1'></i> Mengubah Folder dengan nama <p class ='d-inline-block font-weight-bold'>" . $folderInfo . "</p> menjadi <p class ='d-inline-block font-weight-bold'>" . $data['editFolder'] . "</p>";

            $query = "INSERT INTO history VALUES ('', :id_file, :pesan, :idUser, :namaUser,:folderNama, :waktu)";

            $this->db->query($query);

            $this->db->bind('id_file', $id);
            $this->db->bind('pesan', $p);
            $this->db->bind('idUser', $_SESSION['loginData']['id']);
            $this->db->bind('namaUser', $_SESSION['loginData']['nama']);
            $this->db->bind('folderNama', $folder);
            $this->db->bind('waktu', $now);

            $this->db->execute();
        }

        $query = "UPDATE folder SET infoFolder = :infoFolder, namaFolder = :namaFolder WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);
        $this->db->bind('infoFolder', $data['editFolder']);
        $this->db->bind('namaFolder',  str_replace(" ", "", rtrim($data['editFolder'])));
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function trashfolder()
    {
        $query = "SELECT * FROM folder WHERE id_user = :id_user AND delete_at IS NOT NULL ORDER BY delete_at desc";

        $this->db->query($query);

        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function delfoldertemp($id)
    {

        $id = $_POST['trashpost'];

        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $query = "UPDATE folder SET delete_at = :delete_at WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('delete_at', $now);

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function recoveryFolder($id)
    {
        $query = "UPDATE folder SET delete_at = :delete_at WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('delete_at', null);

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getFolderUser($id)
    {
        $id = $_POST['idFolder'];

        $query = "SELECT * FROM folder WHERE id_user = :id_user AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->bind('id_user', $id);

        return $this->db->resultSet();
    }

    public function getFolderinfo($id)
    {
        $id = $_POST['idFolder'];
        $query = "SELECT * FROM folder WHERE id = :id AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getFolderinfor($id)
    {
        $id = $_POST['idFolder'];
        $query = "SELECT * FROM folder WHERE id = :id AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getFolderUsr($id)
    {

        $query = "SELECT * FROM folder WHERE id_user =" . $id;

        $this->db->query($query);

        return $this->db->single();
    }

    public function getaccountName($id)
    {

        $id = $_POST['idUser'];

        $this->db->query('SELECT * FROM user WHERE id=:id');

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getaccountNames($id)
    {

        $id = $_POST['idUser'];

        $this->db->query('SELECT * FROM user WHERE id=:id');

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getfolderImage($id)
    {
        $id = $_POST['idFolder'];

        $query = "SELECT * FROM files WHERE folderId = :folderId AND ekstensi IN ('jpg','png','jpeg','gif','tiff') AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->bind('folderId', $id);

        return $this->db->resultSet();
    }

    public function getfolderVideo($id)
    {
        $id = $_POST['idFolder'];

        $query = "SELECT * FROM files WHERE folderId = :folderId AND ekstensi IN ('mp4','MOV','mkv','MTS','avi') AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->bind('folderId', $id);

        return $this->db->resultSet();
    }

    public function getfolderAudio($id)
    {
        $id = $_POST['idFolder'];

        $query = "SELECT * FROM files WHERE folderId = :folderId AND ekstensi IN ('mp3','aac','wav','wma','pcm','flac','aicc','ogg') AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->bind('folderId', $id);

        return $this->db->resultSet();
    }

    public function getfolderCountSearch()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $_SESSION['cari'] = $cari;
        } else {
            $cari = $_SESSION['cari'];
        }

        $query = "SELECT * FROM folder WHERE infoFolder LIKE :cari AND delete_at IS NULL AND id_user = " . $_SESSION['loginData']['id'];

        $this->db->query($query);
        $this->db->bind("cari", "%$cari%");
        $this->db->resultSet();

        return $this->db->rowCount();
    }

    public function tampilFolderCari($dataawal, $jumlahdata)
    {
        if (isset($_POST['tombolCari'])) {
            $cari = $_POST['cari'];
            $_SESSION['cari'] = $cari;
        } else {
            $cari = $_SESSION['cari'];
        }

        $this->db->query("SELECT * FROM folder WHERE infoFolder LIKE :cari AND id_user =:id_user AND delete_at IS NULL LIMIT $dataawal, $jumlahdata");

        $this->db->bind("cari", "%$cari%");
        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }
}
