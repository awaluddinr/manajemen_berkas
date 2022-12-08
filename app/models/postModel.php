<?php


class postModel
{
    private $db;
    private $ds;



    public function __construct()
    {
        $this->db = new Database;
        $this->ds = new Helper;
    }

    public function getUploader()
    {
        $query = "SELECT * FROM user WHERE peran != 'admin' AND peran != 'editor' AND id !=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getUsereditor()
    {
        $query = "SELECT * FROM user WHERE peran != 'admin' AND id !=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function upload()
    {
        $nama = $_FILES['uploadImg']['name'];
        $tmp  = $_FILES['uploadImg']['tmp_name'];

        $dir = "assets/media/" . $_SESSION['loginData']['nama'] . "/";
        $filename = $dir . $nama;
        move_uploaded_file($tmp, $filename);

        $compress = "IMG_" . uniqid() . $nama;
        $compImg = $dir . $compress;
        $this->ds->compress($filename, $compImg);
        unlink($filename);
        return strtolower($compress);
    }

    public function rekapUpload()
    {
        $nama = $_FILES['image_file']['name'];
        $tmp  = $_FILES['image_file']['tmp_name'];

        $dir = "assets/media/" . $_SESSION['loginData']['nama'] . "/";
        $filename = $dir . $nama;
        move_uploaded_file($tmp, $filename);

        $compress = "IMG_" . uniqid() . $nama;
        $compImg = $dir . $compress;
        $this->ds->compress($filename, $compImg);
        unlink($filename);
        return strtolower($compress);
    }

    public function imageAdd($data)
    {

        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $dir = "assets/media/" . $_SESSION['loginData']['nama'] . "/";

        $direk = "media/" . $_SESSION['loginData']['nama'];

        $nama = strtolower($data['uploadImg']['name']);

        $img = $dir . $nama;

        $ext = pathinfo($img, PATHINFO_EXTENSION);

        $info = pathinfo($img, PATHINFO_FILENAME) . '_' . uniqid();

        $compressed = $this->ds->compress($data['uploadImg']['tmp_name'], $img, 50);

        $ukuranbaru = filesize($compressed);

        $ukuranbaru = $this->ds->convert($ukuranbaru);

        $query = "INSERT INTO files VALUES ('',:nama, :tipe, :ekstensi, :size, :created_at, :info, :id_user, :delete_at, :folderId, :dir)";

        $this->db->query($query);
        $this->db->bind('nama', $this->upload());
        $this->db->bind('tipe', $data['uploadImg']['type']);
        $this->db->bind('ekstensi', $ext);
        $this->db->bind('size', $ukuranbaru);
        $this->db->bind('created_at', $now);
        $this->db->bind('info', $info);
        $this->db->bind('id_user', $_SESSION['loginData']['id']);
        $this->db->bind('delete_at', null);
        $this->db->bind('folderId', null);
        $this->db->bind('dir', null);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function rekapAdd($data)
    {
        // $info = pathinfo($img, PATHINFO_FILENAME) . '_' . uniqid();
        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');
        $tmp = $data['uploadVid']['tmp_name'];

        $dir = "assets/media/" . $_SESSION['loginData']['nama'] . "/";

        $direk = "media/" . $_SESSION['loginData']['nama'];

        $nama = strtolower(pathinfo($_FILES['uploadVid']['name'], PATHINFO_FILENAME)) . '_' . uniqid();

        $img = $dir . $nama;

        $ext = pathinfo($_FILES['uploadVid']['name'], PATHINFO_EXTENSION);
        $n = $nama . '.' . $ext;
        $namaVideo = $_POST['namaVideo'];
        $simpan = $namaVideo . '.' . $ext;
        $upload = $dir . $n;
        move_uploaded_file($tmp, $upload);
        $query = "INSERT INTO video_post VALUES ('',:namaVideo, :tahun, :created, :id_user, :infoVideo)";

        $this->db->query($query);
        $this->db->bind('namaVideo', $n);
        $this->db->bind('tahun', $ext);
        $this->db->bind('created', $now);
        $this->db->bind('id_user', $_SESSION['loginData']['id']);
        $this->db->bind('infoVideo', $nama);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getVideoPost()
    {
        $query = "SELECT * FROM video_post WHERE id_user =" . $_SESSION['loginData']['id'];
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function uploadVid($data)
    {
        date_default_timezone_set('Asia/makassar');
        $now = date('Y-m-d H:i:s');

        $namaVid = str_replace(" ", "", trim($data['uploadVideo']['name']));
        $tmp = $data['uploadVideo']['tmp_name'];

        $direk = "media/" . $_SESSION['loginData']['nama'];

        $query = "SELECT * FROM user WHERE id =" . $_SESSION['loginData']['id'];
        $this->db->query($query);
        // $this->db->bind('id', $_SESSION['loginData']['id']);
        $data = $this->db->single();
        $folder = $data['nama'];
        $dir = 'assets/media/' . $folder . '/';
        $filename = pathinfo($namaVid, PATHINFO_FILENAME) . '_' . uniqid();
        $ext = pathinfo($namaVid, PATHINFO_EXTENSION);
        $video = $filename . '.' . $ext;
        $uploaded = $dir . $video;
        $ext1 = 'mp4';
        $video1 = $filename . '.' . $ext1;
        $uploaded1 = $dir . $video1;

        $query = "INSERT INTO files VALUES ('',:nama, :tipe, :ekstensi, :size, :created_at, :info, :id_user, :delete_at, :folderId, :dir)";
        $this->db->query($query);
        if ($ext !== 'MTS' && $ext !== 'avi') {
            $this->db->bind('nama', $video);
        } else {
            $this->db->bind('nama', $video1);
        }

        // ffmpeg -n -loglevel error -i $tmp -vcodec libx264 -crf 28 -preset faster -tune film
        $this->db->bind('tipe', $_FILES['uploadVideo']['type']);
        if ($ext !== 'MTS' && $ext !== 'avi') {
            $command = "ffmpeg -n -loglevel error -i $tmp -vcodec libx264 -crf 28 -preset superfast -tune film $uploaded";
            system($command);
            $ukuran = filesize($uploaded);
            $ukuran = $this->ds->convert($ukuran);
            $this->db->bind('size', $ukuran);
        } else {
            $command = "ffmpeg -n -loglevel error -i $tmp -vcodec libx264 -crf 28 -preset superfast -tune film $uploaded1";
            system($command);
            $ukuran = filesize($uploaded1);
            $ukuran = $this->ds->convert($ukuran);
            $this->db->bind('size', $ukuran);
        }

        $this->db->bind('ekstensi', $ext);
        $this->db->bind('created_at', $now);
        $this->db->bind('info', $filename);
        $this->db->bind('id_user', $_SESSION['loginData']['id']);
        $this->db->bind('delete_at', null);
        $this->db->bind('folderId', null);
        $this->db->bind('dir', null);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function recapVideo($data)
    {
        date_default_timezone_set('Asia/makassar');
        $now = date('Y-m-d H:i:s');

        $namaVid = str_replace(" ", "", trim($data['uploadVideo']['name']));
        $tmp = $data['uploadVideo']['tmp_name'];

        $query = "SELECT * FROM user WHERE id =" . $_SESSION['loginData']['id'];
        $this->db->query($query);
        $data = $this->db->single();
        $folder = $data['nama'];
        $dir = 'assets/media/' . $folder . '/';
        $filename = pathinfo($namaVid, PATHINFO_FILENAME) . '_' . uniqid();
        $ext = pathinfo($namaVid, PATHINFO_EXTENSION);
        $video = $filename . '.' . $ext;
        $uploaded = $dir . $video;
        move_uploaded_file($tmp, $uploaded);
    }

    public function uploadAud($data)
    {
        date_default_timezone_set('Asia/makassar');
        $now = date('Y-m-d H:i:s');

        $namaAud = $data['uploadAudio']['name'];
        $tmp = $data['uploadAudio']['tmp_name'];

        $direk = "media/" . $_SESSION['loginData']['nama'];

        $query = "SELECT * FROM user WHERE id =" . $_SESSION['loginData']['id'];
        $this->db->query($query);
        // $this->db->bind('id', $_SESSION['loginData']['id']);
        $data = $this->db->single();
        $folder = $data['nama'];
        $dir = "assets/media/" . $folder . "/";
        $filename = pathinfo($namaAud, PATHINFO_FILENAME) . '_' . uniqid();
        $ext = pathinfo($namaAud, PATHINFO_EXTENSION);
        $audio = $filename . '.' . $ext;
        $uploaded = $dir . $audio;
        move_uploaded_file($tmp, $uploaded);
        $ukuran = filesize($uploaded);
        $ukuran = $this->ds->convert($ukuran);

        $query = "INSERT INTO files VALUES ('',:nama, :tipe, :ekstensi, :size, :created_at, :info, :id_user, :delete_at, :folderId, :dir)";

        $this->db->query($query);
        $this->db->bind('nama', $audio);
        $this->db->bind('tipe', $_FILES['uploadAudio']['type']);
        $this->db->bind('ekstensi', $ext);
        $this->db->bind('size', $ukuran);
        $this->db->bind('created_at', $now);
        $this->db->bind('info', $filename);
        $this->db->bind('id_user', $_SESSION['loginData']['id']);
        $this->db->bind('delete_at', null);
        $this->db->bind('folderId', null);
        $this->db->bind('dir', null);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function folderPost($data)
    {
        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');
        $tmp  = $_FILES['file']['tmp_name'];

        $nama_file = str_replace(" ", "", trim($_FILES['file']['name']));
        $ext = pathinfo($nama_file, PATHINFO_EXTENSION);

        $folder = $_POST['folderku'];
        $folderId = $_POST['idFolderku'];
        $dir = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder . '/';
        $direk = $folder;
        $filename = $dir . $nama_file;
        $info = pathinfo($filename, PATHINFO_FILENAME) . '_' . uniqid();

        $nama1 = strtolower($_FILES['file']['name']);
        $ext1 = pathinfo($nama1, PATHINFO_EXTENSION);


        if ($ext1 === 'jpg' || $ext1 === 'png' || $ext1 === 'jpeg' || $ext1 === 'gif' || $ext1 === 'tiff') {
            $filename = $dir . $nama1;
            move_uploaded_file($tmp, $filename);
            $compress = "new_" . uniqid() . $nama1;
            $compImg = $dir . $compress;
            $compressed = $this->ds->compress($filename, $compImg);
            $ukuranbaru = filesize($compressed);
            $ukuranbaru = $this->ds->convert($ukuranbaru);
            unlink($filename);

            $query = "INSERT INTO files VALUES ('',:nama, :tipe, :ekstensi, :size, :created_at, :info, :id_user, :delete_at, :folderId, :dir)";

            $this->db->query($query);
            $this->db->bind('nama', $compress);
            $this->db->bind('tipe', $_FILES['file']['type']);
            $this->db->bind('ekstensi', $ext1);
            $this->db->bind('size', $ukuranbaru);
        } elseif ($ext === 'MOV' || $ext === 'mp4' || $ext === 'mkv') {
            $videoname = pathinfo($nama_file, PATHINFO_FILENAME) . '_' . uniqid();
            $video = $videoname . '.' . $ext;
            $uploaded = $dir . $video;
            $command = "ffmpeg -n -loglevel error -i $tmp -vcodec libx264 -crf 28 -preset faster -tune film $uploaded";
            system($command);

            system($command);
            $ukuran = filesize($uploaded);
            $ukuran = $this->ds->convert($ukuran);

            $query = "INSERT INTO files VALUES ('',:nama, :tipe, :ekstensi, :size, :created_at, :info, :id_user, :delete_at, :folderId, :dir)";

            $this->db->query($query);
            $this->db->bind('nama', $video);
            $this->db->bind('tipe', $_FILES['file']['type']);
            $this->db->bind('ekstensi', $ext);
            $this->db->bind('size', $ukuran);
        } elseif ($ext === 'MTS' || $ext === 'avi') {
            $videoname = pathinfo($nama_file, PATHINFO_FILENAME) . '_' . uniqid();
            $video1 = $videoname . '.' . 'mp4';
            $uploaded1 = $dir . $video1;
            $command = "ffmpeg -n -loglevel error -i $tmp -vcodec libx264 -crf 28 -preset faster -tune film $uploaded1";
            system($command);

            system($command);
            $ukuran = filesize($uploaded1);
            $ukuran = $this->ds->convert($ukuran);

            $query = "INSERT INTO files VALUES ('',:nama, :tipe, :ekstensi, :size, :created_at, :info, :id_user, :delete_at, :folderId, :dir)";

            $this->db->query($query);
            $this->db->bind('nama', $video1);
            $this->db->bind('tipe', $_FILES['file']['type']);
            $this->db->bind('ekstensi', $ext);
            $this->db->bind('size', $ukuran);
        } elseif ($ext === 'mp3' || $ext === 'aac' || $ext === 'wav' || $ext === 'wma' || $ext === 'pcm' || $ext === 'aiff' || $ext === 'flac' || $ext === 'ogg') {
            $filename = pathinfo($nama_file, PATHINFO_FILENAME) . '_' . uniqid();
            $audio = $filename . '.' . $ext;
            $uploaded = $dir . $audio;
            move_uploaded_file($tmp, $uploaded);
            $ukuran = filesize($uploaded);
            $ukuran = $this->ds->convert($ukuran);

            $query = "INSERT INTO files VALUES ('',:nama, :tipe, :ekstensi, :size, :created_at, :info, :id_user, :delete_at, :folderId, :dir)";

            $this->db->query($query);
            $this->db->bind('nama', $audio);
            $this->db->bind('tipe', $_FILES['file']['type']);
            $this->db->bind('ekstensi', $ext);
            $this->db->bind('size', $ukuran);
        }

        $this->db->bind('created_at', $now);
        $this->db->bind('info', $info);
        $this->db->bind('id_user', $_SESSION['loginData']['id']);
        $this->db->bind('delete_at', null);
        $this->db->bind('folderId', $folderId);
        $this->db->bind('dir', $direk);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahGambar($data)
    {

        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $id = $data['editId'];

        $query = "SELECT * FROM files WHERE id = :id AND id_user=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $file = $this->db->single();

        $img = $file['nama'];

        $imgInfo = $file['info'];

        $ext = explode('.', $img);
        $ext = end($ext);
        $namaimg = rtrim($data['editImage']) . '.' . $ext;
        $this->db->query("SELECT * FROM files WHERE nama = :nama AND id != :id AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL AND folderId IS NULL");

        $this->db->bind('nama', $namaimg);
        $this->db->bind('id', $id);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaimg'] = $data['editImage'];
            $_SESSION['imgId'] = $data['editId'];
            return false;
        }

        $oldname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $img;
        $newname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $namaimg;
        rename($oldname, $newname);

        $p = "<i class='icon-image text-primary mr-1'></i> Mengubah Gambar dengan nama <p class ='d-inline-block font-weight-bold'>" . $imgInfo . "</p> menjadi <p class ='d-inline-block font-weight-bold'>" . $data['editImage'] . "</p>";

        $query = "INSERT INTO history VALUES ('', :id_file, :pesan, :idUser, :namaUser,:folderNama, :waktu)";

        $this->db->query($query);

        $this->db->bind('id_file', $id);
        $this->db->bind('pesan', $p);
        $this->db->bind('idUser', $_SESSION['loginData']['id']);
        $this->db->bind('namaUser', $_SESSION['loginData']['nama']);
        $this->db->bind('folderNama', null);
        $this->db->bind('waktu', $now);
        $this->db->execute();

        $info = $data['editImage'];
        $query = "UPDATE files SET 
                info = :info,
                nama = :nama
                WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('info', $info);
        $this->db->bind('nama', $namaimg);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahVideo($data)
    {

        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $id = $data['editIdVid'];

        $query = "SELECT * FROM files WHERE id = :id AND id_user=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $file = $this->db->single();

        $vid = $file['nama'];

        $vidInfo = $file['info'];

        $ext = explode('.', $vid);
        $ext = end($ext);
        $namavid = rtrim($data['editVideo']) . '.' . $ext;
        $this->db->query("SELECT * FROM files WHERE nama = :nama AND id != :id AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL AND folderId IS NULL");

        $this->db->bind('nama', $namavid);
        $this->db->bind('id', $id);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaVid'] = $data['editVideo'];
            $_SESSION['vidId'] = $data['editIdVid'];
            return false;
        }

        $oldname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $vid;
        $newname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $namavid;
        rename($oldname, $newname);

        $p = "<i class='icon-video text-success mr-1'></i> Mengubah Video dengan nama <p class ='d-inline-block font-weight-bold'>" . $vidInfo . "</p> menjadi <p class ='d-inline-block font-weight-bold'>" . $data['editVideo'] . "</p>";

        $query = "INSERT INTO history VALUES ('', :id_file, :pesan, :idUser, :namaUser,:folderNama, :waktu)";

        $this->db->query($query);

        $this->db->bind('id_file', $id);
        $this->db->bind('pesan', $p);
        $this->db->bind('idUser', $_SESSION['loginData']['id']);
        $this->db->bind('namaUser', $_SESSION['loginData']['nama']);
        $this->db->bind('folderNama', null);
        $this->db->bind('waktu', $now);
        $this->db->execute();

        $info = $data['editVideo'];
        $query = "UPDATE files SET 
                info = :info,
                nama = :nama 
                WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('info', $info);
        $this->db->bind('nama', $namavid);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahVideoAkhir($data)
    {

        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $id = $data['editIdVid'];

        $query = "SELECT * FROM video_post WHERE id = :id AND id_user=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $file = $this->db->single();

        $vid = $file['namaVideo'];

        $vidInfo = $file['infoVideo'];

        $ext = explode('.', $vid);
        $ext = end($ext);
        $namavid = rtrim($data['editVideo']) . '.' . $ext;
        $this->db->query("SELECT * FROM video_post WHERE namaVideo = :namaVideo AND id != :id AND id_user = " . $_SESSION['loginData']['id']);

        $this->db->bind('namaVideo', $namavid);
        $this->db->bind('id', $id);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaVidAkhir'] = $data['editVideo'];
            $_SESSION['vidIdAkhir'] = $data['editIdVid'];
            return false;
        }

        $oldname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $vid;
        $newname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $namavid;
        rename($oldname, $newname);

        $p = "<i class='icon-video text-success mr-1'></i> Mengubah Video dengan nama <p class ='d-inline-block font-weight-bold'>" . $vidInfo . "</p> menjadi <p class ='d-inline-block font-weight-bold'>" . $data['editVideo'] . "</p>";

        $query = "INSERT INTO history VALUES ('', :id_file, :pesan, :idUser, :namaUser,:folderNama, :waktu)";

        $this->db->query($query);

        $this->db->bind('id_file', $id);
        $this->db->bind('pesan', $p);
        $this->db->bind('idUser', $_SESSION['loginData']['id']);
        $this->db->bind('namaUser', $_SESSION['loginData']['nama']);
        $this->db->bind('folderNama', null);
        $this->db->bind('waktu', $now);
        $this->db->execute();

        $info = $data['editVideo'];
        $query = "UPDATE video_post SET 
                infoVideo = :infoVideo,
                namaVideo = :namaVideo 
                WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('infoVideo', $info);
        $this->db->bind('namaVideo', $namavid);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahAudio($data)
    {
        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $id = $data['editIdAud'];

        $query = "SELECT * FROM files WHERE id = :id AND id_user=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $file = $this->db->single();

        $aud = $file['nama'];

        $audInfo = $file['info'];

        $ext = explode('.', $aud);
        $ext = end($ext);
        $namaAud = rtrim($data['editAudio']) . '.' . $ext;
        $this->db->query("SELECT * FROM files WHERE nama = :nama AND id != :id AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL AND folderId IS NULL");

        $this->db->bind('nama', $namaAud);
        $this->db->bind('id', $id);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaAud'] = $data['editAudio'];
            $_SESSION['audId'] = $data['editIdAud'];
            return false;
        }

        $oldname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $aud;
        $newname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $namaAud;
        rename($oldname, $newname);

        $p = "<i class='icon-music text-danger mr-1'></i> Mengubah Audio dengan nama <p class ='d-inline-block font-weight-bold'>" . $audInfo . "</p> menjadi <p class ='d-inline-block font-weight-bold'>" . $data['editAudio'] . "</p>";

        $query = "INSERT INTO history VALUES ('', :id_file, :pesan, :idUser, :namaUser,:folderNama, :waktu)";

        $this->db->query($query);

        $this->db->bind('id_file', $id);
        $this->db->bind('pesan', $p);
        $this->db->bind('idUser', $_SESSION['loginData']['id']);
        $this->db->bind('namaUser', $_SESSION['loginData']['nama']);
        $this->db->bind('folderNama', null);
        $this->db->bind('waktu', $now);
        $this->db->execute();

        $info = $data['editAudio'];
        $query = "UPDATE files SET 
                info = :info,
                nama = :nama 
                WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('info', $info);
        $this->db->bind('nama', $namaAud);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahFgambar($data)
    {
        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $id = $data['editIdImg'];

        $folder = $data['namaFolder'];

        $idFolder = $data['fdrId'];

        $query = "SELECT * FROM files WHERE id = :id AND folderId = :folderId AND id_user=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->bind('folderId', $idFolder);

        $file = $this->db->single();

        $img = $file['nama'];

        $imgInfo = $file['info'];

        $ext = explode('.', $img);
        $ext = end($ext);
        $namaimg = rtrim($data['editImage']) . '.' . $ext;
        $this->db->query("SELECT * FROM files WHERE nama = :nama AND id != :id AND folderId = :folderId AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL");

        $this->db->bind('nama', $namaimg);
        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaimg'] = $data['editImage'];
            $_SESSION['imgId'] = $data['editIdImg'];
            $_SESSION['fdrid'] = $data['fdrId'];
            $_SESSION['namafdr'] = $data['namaFolder'];
            return false;
        }

        $oldname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder . '/' . $img;
        $newname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder . '/' . $namaimg;
        rename($oldname, $newname);

        $p = "Mengubah File <i class='icon-image text-primary mr-1'></i> gambar dengan nama <p class ='d-inline-block font-weight-bold'>" . $imgInfo . "</p> menjadi <p class ='d-inline-block font-weight-bold'>" . $data['editImage'] . "</p> dari folder <i class='icon-folder text-warning mr-1'></i><p class ='d-inline-block font-weight-bold'>" . $folder . "</p>";

        $query = "INSERT INTO history VALUES ('', :id_file, :pesan, :idUser, :namaUser,:folderNama, :waktu)";

        $this->db->query($query);

        $this->db->bind('id_file', $id);
        $this->db->bind('pesan', $p);
        $this->db->bind('idUser', $_SESSION['loginData']['id']);
        $this->db->bind('namaUser', $_SESSION['loginData']['nama']);
        $this->db->bind('folderNama', $folder);
        $this->db->bind('waktu', $now);

        $this->db->execute();


        $info = $data['editImage'];
        $query = "UPDATE files SET 
                info = :info,
                nama = :nama 
                WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('info', $info);
        $this->db->bind('nama', $namaimg);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahFVideo($data)
    {
        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $id = $data['editIdVid'];

        $folder = $data['fdrNama'];

        $idFolder = $data['fdrId'];

        $query = "SELECT * FROM files WHERE id = :id AND folderId = :folderId AND id_user=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->bind('folderId', $idFolder);

        $file = $this->db->single();

        $vid = $file['nama'];

        $vidInfo = $file['info'];

        $ext = explode('.', $vid);
        $ext = end($ext);
        $namavid = rtrim($data['editVideo']) . '.' . $ext;
        $this->db->query("SELECT * FROM files WHERE nama = :nama AND id != :id AND folderId = :folderId AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL");

        $this->db->bind('nama', $namavid);
        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaVid'] = $data['editVideo'];
            $_SESSION['vidId'] = $data['editIdVid'];
            $_SESSION['fdrid'] = $data['fdrId'];
            $_SESSION['namafdr'] = $data['fdrNama'];
            return false;
        }

        $oldname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder . '/' . $vid;
        $newname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder . '/' . $namavid;
        rename($oldname, $newname);

        $p = "Mengubah File <i class='icon-video text-success mr-1'></i> video dengan nama <p class ='d-inline-block font-weight-bold'>" . $vidInfo . "</p> menjadi <p class ='d-inline-block font-weight-bold'>" . $data['editVideo'] . "</p> dari folder <i class='icon-folder text-warning mr-1'></i><p class ='d-inline-block font-weight-bold'>" . $folder . "</p>";

        $query = "INSERT INTO history VALUES ('', :id_file, :pesan, :idUser, :namaUser,:folderNama, :waktu)";

        $this->db->query($query);

        $this->db->bind('id_file', $id);
        $this->db->bind('pesan', $p);
        $this->db->bind('idUser', $_SESSION['loginData']['id']);
        $this->db->bind('namaUser', $_SESSION['loginData']['nama']);
        $this->db->bind('folderNama', $folder);
        $this->db->bind('waktu', $now);

        $this->db->execute();

        $info = $data['editVideo'];
        $query = "UPDATE files SET 
                info = :info,
                nama = :nama 
                WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('info', $info);
        $this->db->bind('nama', $namavid);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahFAudio($data)
    {
        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $id = $data['AudeditId'];

        $folder = $data['namafolderAud'];

        $idFolder = $data['idfolderAud'];

        $query = "SELECT * FROM files WHERE id = :id AND folderId = :folderId AND id_user=" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->bind('folderId', $idFolder);

        $file = $this->db->single();

        $aud = $file['nama'];

        $audInfo = $file['info'];

        $ext = explode('.', $aud);
        $ext = end($ext);
        $namaaud = rtrim($data['editFAudio']) . '.' . $ext;
        $this->db->query("SELECT * FROM files WHERE nama = :nama AND id != :id AND folderId = :folderId AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL");

        $this->db->bind('nama', $namaaud);
        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaAud'] = $data['editFAudio'];
            $_SESSION['audId'] = $data['AudeditId'];
            $_SESSION['fdrid'] = $data['idfolderAud'];
            $_SESSION['namafdr'] = $data['namafolderAud'];
            return false;
        }

        $oldname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder . '/' . $aud;
        $newname = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $folder . '/' . $namaaud;
        rename($oldname, $newname);

        $p = "Mengubah File <i class='icon-music text-danger mr-1'></i> audio dengan nama <p class ='d-inline-block font-weight-bold'>" . $audInfo . "</p> menjadi <p class ='d-inline-block font-weight-bold'>" . $data['editFAudio'] . "</p> dari folder <i class='icon-folder text-warning mr-1'></i><p class ='d-inline-block font-weight-bold'>" . $folder . "</p>";

        $query = "INSERT INTO history VALUES ('', :id_file, :pesan, :idUser, :namaUser,:folderNama, :waktu)";

        $this->db->query($query);

        $this->db->bind('id_file', $id);
        $this->db->bind('pesan', $p);
        $this->db->bind('idUser', $_SESSION['loginData']['id']);
        $this->db->bind('namaUser', $_SESSION['loginData']['nama']);
        $this->db->bind('folderNama', $folder);
        $this->db->bind('waktu', $now);

        $this->db->execute();

        $info = $data['editFAudio'];
        $query = "UPDATE files SET 
                info = :info,
                nama = :nama 
                WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('info', $info);
        $this->db->bind('nama', $namaaud);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function imageShow()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('jpg','png','jpeg','gif','tiff') AND id_user = :id_user AND delete_at IS NULL AND folderId IS NULL ORDER BY created_at DESC";

        $this->db->query($query);

        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function imageSearch($data)
    {

        $gambar = $data['cariGambar'];
        $query = "SELECT * FROM files WHERE info LIKE :cari AND ekstensi IN ('jpg','png','jpeg','gif','tiff') AND id_user = :id_user AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        $this->db->bind('cari', "%$gambar%");
        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function videoSearch($data)
    {

        $video = $data['carivideo'];
        $query = "SELECT * FROM files WHERE info LIKE :cari AND ekstensi IN ('mp4','MOV','MTS','mkv','avi','3gp') AND id_user = :id_user AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        $this->db->bind('cari', "%$video%");
        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function audioSearch($data)
    {

        $audio = $data['cariaudio'];
        $query = "SELECT * FROM files WHERE info LIKE :cari AND ekstensi IN ('mp3','aac','wav','wma','pcm','flac','aicc','ogg') AND id_user = :id_user AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        $this->db->bind('cari', "%$audio%");
        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function videoShow()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('mp4','MOV','MTS','mkv','avi','3gp') AND id_user = :id_user AND delete_at IS NULL AND folderId IS NULL ORDER BY created_at DESC";

        $this->db->query($query);

        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function audioShow()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('mp3','aac','wav','wma','pcm','flac','aiff','ogg') AND id_user = :id_user AND delete_at IS NULL AND folderId IS NULL ORDER BY created_at DESC";

        $this->db->query($query);

        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function mainVideo()
    {
        $query = "SELECT * FROM files WHERE ekstensi ='MOV' AND id_user = :id_user AND delete_at IS NULL ORDER BY info desc";

        $this->db->query($query);

        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->single();
    }

    public function folder()
    {
        $query = "SELECT * FROM user WHERE id =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        // $this->db->bind('id', $_SESSION['loginData']['id']);

        return $this->db->single();
    }

    public function trashShow()
    {
        $query = "SELECT * FROM files WHERE id_user = :id_user AND delete_at IS NOT NULL ORDER BY delete_at desc";

        // $query = "SELECT * FROM folder INNER JOIN files ON files.id_user = folder.id_user WHERE files.delete_at IS NOT NULL AND files.delete_at IS NOT NULL";

        $this->db->query($query);

        $this->db->bind('id_user', $_SESSION['loginData']['id']);

        return $this->db->resultSet();
    }

    public function allImage()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('jpg','png','jpeg','gif','tiff') AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function allVideo()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('mp4','MOV','mkv','MTS','avi') AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function allAudio()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('mp3','aac','wav','wma','pcm','flac','aicc','ogg') AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function jumlahGambarUser($id)
    {
        $query = "SELECT * FROM files WHERE id_user = " . base64_decode($id) . " AND delete_at IS NULL " . " AND ekstensi IN ('jpg','png','jpeg','gif','tiff')";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function jumlahVideoUser($id)
    {
        $query = "SELECT * FROM files WHERE id_user = " . base64_decode($id) . " AND delete_at IS NULL " . " AND ekstensi IN ('mp4','MOV','mkv','MTS','avi')";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function jumlahAudioUser($id)
    {
        $query = "SELECT * FROM files WHERE id_user = " . base64_decode($id) . " AND delete_at IS NULL " . " AND ekstensi IN ('mp3','wav','aac','pcm','flac','aiff','wma','ogg')";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function getUserImage($id)
    {
        $query = "SELECT * FROM files WHERE id_user =" . base64_decode($id) . " AND ekstensi IN ('jpg','png','jpeg','gif','tiff') AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getUserVideo($id)
    {
        $query = "SELECT * FROM files WHERE id_user =" . base64_decode($id) . " AND ekstensi IN ('mp4','MOV','mkv','MTS','avi') AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getUserAudio($id)
    {
        $query = "SELECT * FROM files WHERE id_user =" . base64_decode($id) . " AND ekstensi IN ('mp3','wav','aac','pcm','flac','aiff','wma','ogg') AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function downloadImg()
    {
        $data = $_POST['gambarUser'];
        $name = basename($data);
        $dir = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadImgs()
    {
        $data = $_POST['gambarUser'];
        $fdr = $_POST['abc'];
        $name = basename($data);
        $dir = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $fdr . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadVid()
    {
        $data = $_POST['videoUser'];
        $name = basename($data);
        $dir = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadVids()
    {
        $data = $_POST['videoUser'];
        $fdr = $_POST['abc'];
        $name = basename($data);
        $dir = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $fdr . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadAud()
    {
        $data = $_POST['audioUser'];
        $name = basename($data);
        $dir = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadAuds()
    {
        $data = $_POST['audioUser'];
        $fdr = $_POST['abc'];
        $name = basename($data);
        $dir = 'assets/media/' . $_SESSION['loginData']['nama'] . '/' . $fdr . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadImgById($data)
    {
        $namaImg = $data['namaImg'];
        $folder = $data['user'];
        $name = basename($namaImg);
        $dir = 'assets/media/' . $folder . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadVidById($data)
    {
        $namaVid = $data['namaVid'];
        $folder = $data['user'];
        $name = basename($namaVid);
        $dir = 'assets/media/' . $folder . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadAudById($data)
    {
        $namaAud = $data['namaAud'];
        $folder = $data['user'];
        $name = basename($namaAud);
        $dir = 'assets/media/' . $folder . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadImgFolder($data)
    {
        $namaImg = $data['namaImg'];
        $akun = $data['user'];
        $name = basename($namaImg);
        $folder = $data['namaFolder'];
        $dir = 'assets/media/' . $akun . '/' . $folder . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadVidFolder($data)
    {
        $namaVid = $data['namaVid'];
        $akun = $data['user'];
        $name = basename($namaVid);
        $folder = $data['namaFolder'];
        $dir = 'assets/media/' . $akun . '/' . $folder . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function downloadAudFolder($data)
    {
        $namaAud = $data['namaAud'];
        $akun = $data['user'];
        $name = basename($namaAud);
        $folder = $data['namaFolder'];
        $dir = 'assets/media/' . $akun . '/' . $folder . '/' . $name;

        if (!empty($name) && file_exists($dir)) {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition:attachement; filename=$name");
            header("Content-Type:application/zip");
            header("Content-Transfer-Encoding: binary");
            readfile($dir);
            exit;
        }
    }

    public function getFileById($id)
    {
        $query = "SELECT * FROM files WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getVideoAkhirById($id)
    {
        $query = "SELECT * FROM video_post WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function filesDel($id)
    {
        $id = $_POST['filesId'];

        $data = $this->getFileById($id);

        $file = $data['nama'];

        if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $file)) {
            unlink("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $file);
        }

        $query = "DELETE FROM files WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function filesFolderDel($data)
    {

        $id = $data['idFiles'];

        $direk = $data['direktori'];

        $files = $this->getFileById($id);

        $file = $files['nama'];

        if (file_exists("assets/" . $direk . "/" . $file)) {
            unlink("assets/" . $direk . "/" . $file);
        }

        $query = "DELETE FROM files WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteImage($id)
    {

        $id = $_POST['gambarId'];

        $data = $this->getFileById($id);

        $img = $data['nama'];

        if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $img)) {
            unlink("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $img);
        }

        $query = "DELETE FROM files WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteFImage($data)
    {
        $id = $data['gambarId'];

        $idFolder = $data['folderId'];

        $namaFolder = $data['namafdr'];

        $query = "SELECT * FROM files WHERE id = :id AND delete_at IS NULL AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);

        $file = $this->db->single();

        $img = $file['nama'];

        if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $namaFolder . "/" . $img)) {
            unlink("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $namaFolder . "/" . $img);
        }

        $query = "DELETE FROM files WHERE id = :id AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteFvideo($data)
    {
        $id = $data['videoId'];

        $idFolder = $data['idfolderVid'];

        $namaFolder = $data['folderNamaVid'];

        $query = "SELECT * FROM files WHERE id = :id AND delete_at IS NULL AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);

        $file = $this->db->single();

        $vid = $file['nama'];

        if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $namaFolder . "/" . $vid)) {
            unlink("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $namaFolder . "/" . $vid);
        }

        $query = "DELETE FROM files WHERE id = :id AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteFaudio($data)
    {
        $id = $data['audDelid'];

        $idFolder = $data['audfolid'];

        $namaFolder = $data['audfolnama'];

        $query = "SELECT * FROM files WHERE id = :id AND delete_at IS NULL AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);

        $file = $this->db->single();

        $aud = $file['nama'];

        if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $namaFolder . "/" . $aud)) {
            unlink("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $namaFolder . "/" . $aud);
        }

        $query = "DELETE FROM files WHERE id = :id AND folderId = :folderId AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->bind('folderId', $idFolder);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteVideo($id)
    {

        $id = $_POST['videoId'];

        $data = $this->getFileById($id);

        $vid = $data['nama'];

        if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $vid)) {
            unlink("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $vid);
        }

        $query = "DELETE FROM files WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteVideoAkhir($id)
    {

        $id = $_POST['videoId'];

        $data = $this->getVideoAkhirById($id);

        $vid = $data['namaVideo'];

        if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $vid)) {
            unlink("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $vid);
        }

        $query = "DELETE FROM video_post WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteAudio($id)
    {

        $id = $_POST['audioId'];

        $data = $this->getFileById($id);

        $aud = $data['nama'];

        if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $aud)) {
            unlink("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $aud);
        }

        $query = "DELETE FROM files WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function folderrelasi()
    {
        $query = "SELECT * FROM files LEFT JOIN folder ON files.folderId = folder.id";
        $this->db->query($query);
        $this->db->single();
    }

    public function hapusPrank($data)
    {

        $id = $data['trashpost'];
        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $query = "UPDATE files SET delete_at = :delete_at WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('delete_at', $now);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function recovery($id)
    {
        $query = "UPDATE files SET delete_at = :delete_at WHERE id = :id AND id_user =" . $_SESSION['loginData']['id'];

        $this->db->query($query);

        $this->db->bind('delete_at', null);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function jumlahGambar()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('jpg','png','jpeg','gif','tiff') AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function jumlahVideo()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('mp4','MOV','MTS','mkv','avi','3gp') AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function jumlahAudio()
    {
        $query = "SELECT * FROM files WHERE ekstensi IN ('mp3','wav','aac','pcm','flac','aiff','wma','ogg') AND id_user = " . $_SESSION['loginData']['id'] . " AND delete_at IS NULL";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function getImagebyId($id)
    {

        $id = $_POST['idFolder'];

        $query = "SELECT * FROM files WHERE id_user =" . $id . " AND ekstensi IN ('jpg','png','jpeg','gif','tiff') AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getVideobyId($id)
    {
        $id = $_POST['idFolder'];

        $query = "SELECT * FROM files WHERE id_user =" . $id . " AND ekstensi IN ('mp4','MOV','mkv','MTS','avi') AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        return $this->db->resultSet();
    }


    public function getAudiobyId($id)
    {
        $id = $_POST['idFolder'];

        $query = "SELECT * FROM files WHERE id_user =" . $id . " AND ekstensi IN ('mp3','aac','wav','wma','pcm','flac','aicc','ogg') AND delete_at IS NULL AND folderId IS NULL";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getHistory()
    {
        $query = "SELECT * FROM history ORDER BY waktu DESC LIMIT 3";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getAllHistory($dataawal, $jumlahdata)
    {

        $query = "SELECT * FROM history ORDER BY waktu DESC LIMIT $dataawal,$jumlahdata";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getData($dataawal, $jumlahdata)
    {

        if (isset($_POST['tombolCari'])) {
            $cari = $_POST['cari'];
            $_SESSION['cari'] = $cari;
        } else {
            $cari = $_SESSION['cari'];
        }

        $query = "SELECT * FROM history WHERE pesan LIKE :cari LIMIT $dataawal, $jumlahdata";

        $this->db->query($query);

        $this->db->bind("cari", "%$cari%");

        return $this->db->resultSet();
    }

    public function getHistoryCount()
    {

        $query = "SELECT * FROM history";

        $this->db->query($query);

        $this->db->resultSet();

        return $this->db->rowCount();
    }

    public function getHistoryCountSearch()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $_SESSION['cari'] = $cari;
        } else {
            $cari = $_SESSION['cari'];
        }

        $query = "SELECT * FROM history WHERE pesan LIKE :cari";

        $this->db->query($query);
        $this->db->bind("cari", "%" . $_SESSION['cari'] . "%");
        $this->db->resultSet();

        return $this->db->rowCount();
    }

    public function hapustime()
    {
        $query = "DELETE FROM history WHERE
        waktu < NOW() - INTERVAL 1 day";

        $this->db->query($query);

        $this->db->execute();
    }
}
