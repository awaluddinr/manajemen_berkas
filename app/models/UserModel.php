<?php


class UserModel
{

    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getuserData()
    {
        // $this->db->query("SELECT * FROM user WHERE userId =:userId AND peran !='admin'");
        // $this->db->bind('userId', $_SESSION['loginData']['id']);
        $this->db->query("SELECT * FROM user WHERE peran !='admin'");

        return $this->db->resultSet();
    }

    public function getuserDataLimit()
    {
        // $this->db->query("SELECT * FROM user WHERE userId =:userId AND peran !='admin'");
        // $this->db->bind('userId', $_SESSION['loginData']['id']);
        $this->db->query("SELECT * FROM user WHERE peran !='admin' LIMIT 3");

        return $this->db->resultSet();
    }

    public function getbyId($id)
    {
        $this->db->query('SELECT * FROM user WHERE id=:id');

        $this->db->bind('id', base64_decode($id));

        return $this->db->single();
    }

    public function upload()
    {
        $nama = $_FILES['img']['name'];
        $type = $_FILES['img']['type'];
        $size = $_FILES['img']['size'];
        $error = $_FILES['img']['error'];
        $tmp = $_FILES['img']['tmp_name'];

        $extensiValid = ['jpg', 'png', 'jpeg'];
        $extensi = explode('.', $nama);
        $extensi = strtolower(end($extensi));

        if (!in_array($extensi, $extensiValid)) {
            $_SESSION['type'] = 'Gagal! Pilih gambar dengan tipe Jpg, Png atau Jpeg';
            return false;
        }

        if ($size > 3000000) {
            $_SESSION['size'] = 'Gagal! Ukuran Gambar Terlalu Besar';
            return false;
        }

        if ($type != 'image/jpeg' && $type != 'image/png' && $type != 'image/jpg') {
            $_SESSION['tipe'] = 'Gagal! yang anda pilih bukan gambar';
            return false;
        }

        $namabaru = uniqid();
        $namabaru .= '.';
        $namabaru .= $extensi;

        move_uploaded_file($tmp, 'assets/media/img/' . $namabaru);

        return $namabaru;
    }
    public function tambahUser($data)
    {

        $nama = str_replace(" ", "", trim($data['nama']));
        $user = strtolower(stripslashes($data['user']));
        $pass = strtolower(str_replace(" ", "", $data['pass']));
        $pass1 = strtolower(str_replace(" ", "", $data['passUlang']));

        if ($pass !== $pass1) {
            $_SESSION['adaNamasandi'] = $data['nama'];
            $_SESSION['adaUsersandi'] = $data['user'];
            $_SESSION['adasandi'] = $data['pass'];
            $_SESSION['adasandi1'] = $data['passUlang'];
            $_SESSION['adaLevel'] = $data['level'];
            return false;
        }

        $this->db->query("SELECT * FROM user WHERE username = :username AND nama = :nama");

        $this->db->bind('username', $user);
        $this->db->bind('nama', $nama);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaNameUser'] = $data['nama'];
            $_SESSION['adaUserName'] = $data['user'];
            $_SESSION['adaPassword'] = $data['pass'];
            $_SESSION['adaPassword1'] = $data['passUlang'];
            $_SESSION['adaLevel'] = $data['level'];
            return false;
        }

        $this->db->query("SELECT * FROM user WHERE username = :username");

        $this->db->bind('username', $user);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaNama'] = $data['nama'];
            $_SESSION['adaUser'] = $data['user'];
            $_SESSION['adaPass'] = $data['pass'];
            $_SESSION['adaPass1'] = $data['passUlang'];
            $_SESSION['adaLevel'] = $data['level'];
            return false;
        }

        $this->db->query("SELECT * FROM user WHERE nama = :nama");

        $this->db->bind('nama', $nama);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['adaName'] = $data['nama'];
            $_SESSION['adaUsername'] = $data['user'];
            $_SESSION['adaPassword'] = $data['pass'];
            $_SESSION['adaPassword1'] = $data['passUlang'];
            $_SESSION['adaLevel'] = $data['level'];
            return false;
        }

        $pass = password_hash($pass, PASSWORD_DEFAULT);

        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');
        $dt = 'Belum Pernah Login';
        $gambar = 'nophoto.png';


        $query = "INSERT INTO user 
        VALUES ('',:username,:pass,:nama,:info,:peran,:terdaftar,:aktivitas,:gambar)";

        $this->db->query($query);
        $this->db->bind('username', $user);
        $this->db->bind('pass', $pass);
        $this->db->bind('nama', $nama);
        $this->db->bind('info', $_POST['nama']);
        $this->db->bind('peran', $data['level']);
        $this->db->bind('terdaftar', $now);
        $this->db->bind('aktivitas', $dt);
        $this->db->bind('gambar', $gambar);

        // if ($gambar === false) {
        //     return false;
        // }

        $this->db->execute();
        mkdir("assets/media/" . $nama);

        return $this->db->rowCount();
    }

    public function getProfileImageById($id)
    {
        $query = "SELECT * FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $id);

        return $this->db->single();
    }


    public function getImageById($id)
    {
        $query = "SELECT * FROM files WHERE id_user =" . $id;

        $this->db->query($query);

        return $this->db->single();
    }


    public function hapusData($id)
    {

        $id = $_POST['userId'];
        // unlink profile image
        $gambar = $this->getProfileImageById($id);

        $gbr = $gambar['gambar'];

        if (file_exists("assets/media/img/$gbr") && $gbr !== 'nophoto.png') {
            unlink("assets/media/img/$gbr");
        }


        // unlink setiap postingan
        $query = "SELECT * FROM files WHERE id_user =" . $id;

        $this->db->query($query);

        $data = $this->db->resultSet();

        foreach ($data as $i) {
            $nama = $i['nama'];
            if (file_exists("assets/media/img/" . $nama)) {
                unlink("assets/media/img/" . $nama);
            }
        }

        // $query = "SELECT * FROM folder WHERE id_user =" . $id;

        // $this->db->query($query);

        // $folder = $this->db->resultSet();

        // foreach ($folder as $each) {
        //     $folderNama = $each['namaFolder'];

        //     if (file_exists("assets/media/" . $_SESSION['loginData']['nama'] . "/" . "$folderNama")) {
        //         rmdir("assets/media/" . $_SESSION['loginData']['nama'] . "/" . "$folderNama");
        //     }
        // }

        // if (file_exists("assets/media/" . $_SESSION['loginData']['nama'])) {
        //     unlink("assets/media/" . $_SESSION['loginData']['nama']);
        // }

        $query = "SELECT * FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $id);

        $folder = $this->db->single();

        $data = $folder['nama'];

        if (file_exists("assets/media/" . $data)) {
            $query = "SELECT * FROM folder WHERE id_user =" . $id;

            $this->db->query($query);

            $folders = $this->db->resultSet();

            foreach ($folders as $each) {
                $folderNama = $each['namaFolder'];
                if (file_exists("assets/media/" . $data . "/" . $folderNama)) {
                    $files = scandir("assets/media/" . $data . "/" . $folderNama);

                    foreach ($files as $file) {
                        if ($file === '.' or $file === '..') {
                            continue;
                        } else {
                            unlink("assets/media/" . $data . "/" . $folderNama . "/" . $file);
                        }
                    }
                    rmdir("assets/media/" . $data . "/" . $folderNama);
                }
            }
            // unlink setiap postingan
            $query = "SELECT * FROM files WHERE id_user =" . $id;

            $this->db->query($query);

            $isi = $this->db->resultSet();

            foreach ($isi as $i) {
                $nama = $i['nama'];
                if (file_exists("assets/media/" . $data . "/" . $nama)) {
                    unlink("assets/media/" . $data . "/" . $nama);
                }
            }
            rmdir("assets/media/" . $data);
        }

        $query = "DELETE FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function jumlahUser()
    {
        $query = "SELECT * FROM user WHERE peran = 'footager'";

        $this->db->query($query);

        $this->db->resultSet();

        $row = $this->db->rowCount();

        return $row;
    }

    public function lov($user, $pass)
    {

        $query = "SELECT * FROM user WHERE username = :username";

        $this->db->query($query);

        $this->db->bind('username', $user);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $row = $this->db->single();

            $id = $row['id'];
            $nama = $row['nama'];
            $gambar = $row['gambar'];
            $role = $row['peran'];
            $password = $row['pass'];
            $info = $row['info'];

            if (password_verify($pass, $password)) {
                $_SESSION['login'] = true;
                $_SESSION['pesan'] = true;
                $_SESSION['peran'] = "$role";
                $_SESSION['loginData'] = [
                    'id' => $id,
                    'nama' => $nama,
                    'gambar' => $gambar,
                    'info'  => $info
                ];

                date_default_timezone_set('Asia/makassar');

                $now = date('Y-m-d H:i:s');

                $query = "UPDATE user SET aktivitas = :aktivitas WHERE id = :id";

                $this->db->query($query);

                $this->db->bind('aktivitas', $now);
                $this->db->bind('id', $id);
                $this->db->execute();

                if ($_SESSION['peran'] == 'admin') {
                    header('Location:' . URL . '/Home');
                    exit(0);
                } elseif ($_SESSION['peran'] == 'footager' || $_SESSION['peran'] == 'editor') {
                    header('Location:' . URL . '/User');
                    exit(0);
                }
            } else {
                $_SESSION['password'] = 'Password salah';
                header('Location:' . URL . '/Log');
                exit;
            }
        } else {
            $_SESSION['username'] = 'Username Tidak Dikenali';
            header('Location:' . URL . '/Log');
            exit;
        }

        return $this->db->single();
    }

    public function getUserById($id)
    {
        $id = $_POST['idFolder'];

        $this->db->query('SELECT * FROM user WHERE id=:id');

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getprofile()
    {
        $this->db->query('SELECT * FROM user WHERE id = :id');

        $this->db->bind('id', $_SESSION['loginData']['id']);

        return $this->db->single();
    }

    public function profilUbah($data)
    {
        $query = "SELECT * FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $_SESSION['loginData']['id']);

        $user =  $this->db->single();

        $akun = $user['username'];
        $namauser = $user['nama'];

        $query = "SELECT * FROM user WHERE username = :username AND id != :id";

        $this->db->query($query);

        $this->db->bind('username', str_replace(" ", "", trim($data['akun'])));
        $this->db->bind('id', $_SESSION['loginData']['id']);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['username'] = $data['akun'];
            return false;
        }

        $query = "SELECT * FROM user WHERE nama = :nama AND id != :id";

        $this->db->query($query);

        $this->db->bind('nama', str_replace(" ", "", trim($data['info'])));
        $this->db->bind('id', $_SESSION['loginData']['id']);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['nama'] = $data['info'];
            return false;
        }

        if ($_FILES['img']['error'] == 4 && str_replace(" ", "", trim($data['akun'])) == $akun && str_replace(" ", "", trim($data['info'])) == $namauser) {
            $_SESSION['nochanges'] = true;
            return true;
        }

        $query = "UPDATE user SET username = :username, nama = :nama, info = :info, gambar = :gambar WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('username', str_replace(" ", "", trim($data['akun'])));
        $this->db->bind('nama', str_replace(" ", "", trim($data['info'])));
        $this->db->bind('info', $data['info']);
        $this->db->bind('id', $_SESSION['loginData']['id']);

        if ($_FILES['img']['error'] === 4) {
            $this->db->bind('gambar', $data['gambarlama']);
        } else {
            if (file_exists("assets/media/img/" . $data['gambarlama']) && $data['gambarlama'] !== 'nophoto.png') {
                unlink("assets/media/img/" . $data['gambarlama']);
            }
            $this->db->bind('gambar', $this->upload());
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function passwordUbah($data)
    {
        $pw = strtolower(str_replace(" ", "", $data['newpass']));
        $pw2 = strtolower(str_replace(" ", "", $data['newpass2']));

        $query = "SELECT * FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $_SESSION['loginData']['id']);

        $row = $this->db->single();

        $pass = $row['pass'];

        if (password_verify($data['oldpass'], $pass)) {
            if ($pw == $pw2) {
                $query = "UPDATE user SET pass = :pass WHERE id = :id";

                $this->db->query($query);

                $this->db->bind('pass', password_hash($pw, PASSWORD_DEFAULT));
                $this->db->bind('id', $_SESSION['loginData']['id']);

                $this->db->execute();

                return $this->db->rowCount();
            } else {
                $_SESSION['notmatch'] = true;
                return false;
            }
        } else {
            $_SESSION['notpass'] = true;
            return false;
        }
    }

    public function passwordUserUbah($data)
    {
        $pw = strtolower(str_replace(" ", "", $data['newpass']));
        $pw2 = strtolower(str_replace(" ", "", $data['newpass2']));

        $query = "SELECT * FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $data['userid']);

        $row = $this->db->single();

        $pass = $row['pass'];

        if (password_verify($data['oldpass'], $pass)) {
            if ($pw == $pw2) {
                $query = "UPDATE user SET pass = :pass WHERE id = :id";

                $this->db->query($query);

                $this->db->bind('pass', password_hash($pw, PASSWORD_DEFAULT));
                $this->db->bind('id', $_SESSION['loginData']['id']);

                $this->db->execute();

                return $this->db->rowCount();
            } else {
                $_SESSION['notmatch'] = true;
                return false;
            }
        } else {
            $_SESSION['notpass'] = true;
            return false;
        }
    }

    public function ubahUser($data)
    {

        date_default_timezone_set('Asia/makassar');

        $now = date('Y-m-d H:i:s');

        $query = "SELECT * FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $data['userid']);

        $user =  $this->db->single();

        $akun = $user['username'];
        $namauser = $user['nama'];

        $query = "SELECT * FROM user WHERE username = :username AND id != :id";

        $this->db->query($query);

        $this->db->bind('username', str_replace(" ", "", trim($data['akun'])));
        $this->db->bind('id', $data['userid']);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['username'] = $data['akun'];
            return false;
        }

        $query = "SELECT * FROM user WHERE nama = :nama AND id != :id";

        $this->db->query($query);

        $this->db->bind('nama', str_replace(" ", "", trim($data['info'])));
        $this->db->bind('id', $data['userid']);

        $this->db->single();

        if ($this->db->rowCount() === 1) {
            $_SESSION['nama'] = $data['info'];
            return false;
        }

        $query = "SELECT * FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $data['userid']);

        $user = $this->db->single();

        $nama = $user['nama'];

        $nwname = str_replace(" ", "", rtrim($data['info']));

        $oldname = 'assets/media/' . $nama;
        $newname = 'assets/media/' . $nwname;
        rename($oldname, $newname);

        if ($_FILES['img']['error'] == 4 && str_replace(" ", "", trim($data['akun'])) == $akun && str_replace(" ", "", trim($data['info'])) == $namauser) {
            $_SESSION['nochanges'] = true;
            return true;
        }

        $query = "UPDATE user SET username = :username, nama = :nama, info = :info, gambar = :gambar WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('username', str_replace(" ", "", trim($data['akun'])));
        $this->db->bind('nama', str_replace(" ", "", trim($data['info'])));
        $this->db->bind('info', $data['info']);
        $this->db->bind('id', $data['userid']);

        if ($_FILES['img']['error'] === 4) {
            $this->db->bind('gambar', $data['imglama']);
        } else {
            if (file_exists("assets/media/img/" . $data['imglama']) && $data['imglama'] !== 'nophoto.png') {
                unlink("assets/media/img/" . $data['imglama']);
            }
            $this->db->bind('gambar', $this->upload());
        }
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getprofileImg($data)
    {
        $img = $data['user'];
        $query = "SELECT * FROM user WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $img);

        $this->db->single();
    }

    public function logout()
    {
        session_destroy();
        session_unset();
    }
}
