<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Kelola User</li>
    </ol>
</div>
<!-- Page header end -->

<!-- container -->
<div class="main-container">

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 bg-white ">
            <header class="pt-3 pb-3">
                <button class="btn btn-primary shadow-none" type="button" data-toggle="modal" data-target="#tambahModal">
                    <i class="icon-add mr-2" style="font-size: 16px;"></i>
                    Tambah Data</button>
                <!-- Modal -->
                <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#007bff;">
                                <h5 class="modal-title" id="basicModalLabel">Buat User</h5>
                                <button type="button" class="close keluar" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= URL; ?>/Home/userAdd" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="user" placeholder="Masukkan Username" required autocomplete="autocomplete">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required autocomplete="autocomplete">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-0">Level</label>
                                        <small class="text-danger d-block">*Level yang sudah dipilih tidak dapat diedit</small>
                                        <?php if ($_SESSION['peran'] == 'admin') : ?>
                                            <select class="form-control" name="level">
                                                <option value="footager">footager</option>
                                                <option value="editor">editor</option>
                                            </select>
                                        <?php else : ?>
                                            <select class="form-control" name="level">
                                                <option value="admin">admin</option>
                                                <option value="footager">footager</option>
                                                <option value="editor">editor</option>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Masukkan Gambar">
                                    </div> -->
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="password">Password :</label>
                                                <input type="password" class="form-control" name="pass" id="password" placeholder="Masukkan password" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="ulangpassword">Ulangi Password :</label>
                                                <input type="password" class="form-control" name="passUlang" id="ulangpassword" placeholder="Masukkan Ulang password" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end of modal -->
            </header>
            <div class="table-container">
                <div class="t-header">Daftar Pengguna</div>
                <div class="table-responsive">
                    <table id="basicExample" class="table custom-table border-0">
                        <thead>
                            <tr>
                                <th class="px-3">No.</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Peran</th>
                                <th class="text-center">Terdaftar</th>
                                <th class="text-center">Login</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['user'] as $user) : ?>
                                <tr>
                                    <td class="px-1 text-center"><?= $i++ ?></td>
                                    <td class="text-center"><img src="<?= BASEURL; ?>/media/img/<?= $user['gambar']; ?>" class="avatar" alt="Agent" /></td>
                                    <td class="text-center"><?= $user['info']; ?></td>
                                    <td class="text-center"><?= $user['username']; ?></td>
                                    <td class="text-center"><?= $user['peran']; ?></td>
                                    <td class="text-center"><?= date('d M Y H:i', strtotime($user['terdaftar'])); ?></td>
                                    <?php if ($user['aktivitas'] == 'Belum Pernah Login') : ?>
                                        <td class="text-danger font-weight-bold"><?= $user['aktivitas']; ?></td>
                                    <?php else : ?>
                                        <td><?= date('d M Y H:i', strtotime($user['aktivitas'])); ?></td>
                                    <?php endif; ?>
                                    <td class="mx-auto text-center">
                                        <a href="<?= URL; ?>/Home/edituserpage/<?= base64_encode($user['id']); ?>"><i class="icon-edit1 text-warning font-weight-bold" style="font-size: 25px;"></i></a>
                                        <a class="deleteUser" href="#" data-toggle="modal" data-target=".modalDeleteUser" data-userid="<?= $user['id']; ?>"><i class="icon-trash text-danger font-weight-bold" style="font-size: 25px;"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal modalsuksestambah animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="mb-0 py-2">
            </div>
            <div class="modal-body text-center">
                <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                <h3 class="mb-2">Sukses</h3>
                <h5>User Baru Berhasil Dibuat</h5>
            </div>
            <div class="modal-footer justify-content-center" style="padding: .5rem;">
                <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- linear-gradient(to right, #0f0c29, #1f1c38, #24243e) -->
<!-- #343a40 linear-gradient(180deg, #52585d, #343a40) repeat-x !important -->
<!-- #343a40 linear-gradient(180deg, #424548, #343a40) repeat-x !important -->
<!-- main container end -->

<!-- modal folder Delete -->
<div class="modal modalDeleteUser animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="mb-0 py-2">
                <!-- <h5 class="modal-title" id="">Hapus Folder</h5> -->
                <!-- <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
            </div>
            <form action="<?= URL; ?>/Home/delete/" method="POST">
                <div class="modal-body pb-1 text-center">
                    <input id="userId" type="hidden" name="userId" value="">
                    <i class="icon-warning text-danger pt-1 mb-4 d-block" style="font-size: 50px;"></i>
                    <h3 class="mb-2"> Apakah Anda Yakin Untuk Menghapus User Ini?</h3>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal modalsuksesHapus animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="mb-0 py-2">
            </div>
            <div class="modal-body text-center">
                <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                <h3 class="mb-2">Sukses</h3>
                <h5>User Berhasil Dihapus</h5>
            </div>
            <div class="modal-footer justify-content-center" style="padding: .5rem;">
                <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modalgagalAdduser animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="mb-0 py-2">
            </div>
            <?php if (isset($_SESSION['adaUser'])) : ?>
                <div class="mb-0 text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">User Gagal Dibuat</h5>
                    <p>User dengan akun <font class="text-danger"><?= $_SESSION['adaUser']; ?></font> sudah ada</p>
                </div>
                <div class="modal-body">
                    <form action="<?= URL; ?>/User_M/userAdd" method="POST">
                        <div class="form-group m-0">

                            <input type="hidden" value="<?= $_SESSION['adaNama']; ?>" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required autocomplete="autocomplete">
                            <input type="hidden" name="level" value="<?= $_SESSION['adaLevel']; ?>">
                            <input type="hidden" value="<?= $_SESSION['adaPass']; ?>" class="form-control" name="pass" id="password" placeholder="Masukkan password" required>
                            <input type="hidden" value="<?= $_SESSION['adaPass1']; ?>" class="form-control" name="passUlang" id="ulangpassword" placeholder="Masukkan Ulang password" required>

                            <div class="form-group">
                                <label for="username">Nama akun:</label>
                                <input type="text" class="form-control" value="<?= $_SESSION['adaUser']; ?>" id="username" name="user" placeholder="Masukkan Username" required autocomplete="autocomplete">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <?php unset($_SESSION['adaUser']); ?>
            <?php elseif (isset($_SESSION['adaName'])) : ?>
                <div class="mb-0 text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">User Gagal Dibuat</h5>
                    <p>User dengan nama <font class="text-danger"><?= $_SESSION['adaName']; ?></font> sudah ada</p>
                </div>
                <div class="modal-body">
                    <form action="<?= URL; ?>/User_M/userAdd" method="POST">
                        <div class="form-group m-0">
                            <input type="hidden" class="form-control" value="<?= $_SESSION['adaUsername']; ?>" id="username" name="user" placeholder="Masukkan Username" required autocomplete="autocomplete">

                            <input type="hidden" name="level" value="<?= $_SESSION['adaLevel']; ?>">
                            <input type="hidden" value="<?= $_SESSION['adaPassword']; ?>" class="form-control" name="pass" id="password" placeholder="Masukkan password" required>
                            <input type="hidden" value="<?= $_SESSION['adaPassword1']; ?>" class="form-control" name="passUlang" id="ulangpassword" placeholder="Masukkan Ulang password" required>

                            <div class="form-group">
                                <label for="nama">Nama User:</label>
                                <input type="text" value="<?= $_SESSION['adaName']; ?>" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required autocomplete="autocomplete">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <?php unset($_SESSION['adaName']); ?>
            <?php elseif (isset($_SESSION['adaNameUser'])) : ?>
                <div class="mb-0 text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">User Gagal Dibuat</h5>
                    <p>User dengan akun <font class="text-danger"><?= $_SESSION['adaUserName']; ?></font> dan nama <font class="text-danger"><?= $_SESSION['adaNameUser']; ?></font> sudah ada</p>
                </div>
                <div class="modal-body">
                    <form action="<?= URL; ?>/User_M/userAdd" method="POST">
                        <div class="form-group m-0">

                            <input type="hidden" name="level" value="<?= $_SESSION['adaLevel']; ?>">
                            <input type="hidden" value="<?= $_SESSION['adaPassword']; ?>" class="form-control" name="pass" id="password" placeholder="Masukkan password" required>
                            <input type="hidden" value="<?= $_SESSION['adaPassword1']; ?>" class="form-control" name="passUlang" id="ulangpassword" placeholder="Masukkan Ulang password" required>
                            <div class="form-group">
                                <label for="username">Nama Akun:</label>
                                <input type="text" class="form-control" value="<?= $_SESSION['adaUserName']; ?>" id="username" name="user" placeholder="Masukkan Username" required autocomplete="autocomplete">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama User:</label>
                                <input type="text" value="<?= $_SESSION['adaNameUser']; ?>" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required autocomplete="autocomplete">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <?php unset($_SESSION['adaNameUser']); ?>
                <?php unset($_SESSION['adaUserName']); ?>
            <?php elseif (isset($_SESSION['adasandi'])) : ?>
                <div class="mb-0 text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">User Gagal Dibuat</h5>
                    <p class="text-danger">Password yang dimasukan tidak sama!!!!</p>
                </div>
                <div class="modal-body">
                    <form action="<?= URL; ?>/User_M/userAdd" method="POST">
                        <div class="form-group m-0">
                            <input type="hidden" class="form-control" value="<?= $_SESSION['adaUsersandi']; ?>" id="username" name="user" placeholder="Masukkan Username" required autocomplete="autocomplete">
                            <input type="hidden" value="<?= $_SESSION['adaNamasandi']; ?>" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required autocomplete="autocomplete">
                            <input type="hidden" name="level" value="<?= $_SESSION['adaLevel']; ?>">
                            <input type="hidden" value="<?= $_SESSION['adasandi']; ?>" class="form-control" name="pass" id="password" placeholder="Masukkan password" required>
                            <input type="hidden" value="<?= $_SESSION['adasandi1']; ?>" class="form-control" name="passUlang" id="ulangpassword" placeholder="Masukkan Ulang password" required>

                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="text" value="<?= $_SESSION['adasandi']; ?>" class="form-control" name="pass" id="password" placeholder="Masukkan password" required>
                            </div>

                            <div class="form-group">
                                <label for="ulangpassword">Ulangi Password :</label>
                                <input type="text" value="<?= $_SESSION['adasandi1']; ?>" class="form-control" name="passUlang" id="ulangpassword" placeholder="Masukkan Ulang password" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <?php unset($_SESSION['adasandi']); ?>
                <?php unset($_SESSION['adasandi1']); ?>
            <?php elseif (isset($_SESSION['gabung'])) : ?>
                <div class="mb-0 text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">User Gagal Dibuat</h5>
                    <p>User dengan akun <font class="text-danger"><?= $_SESSION['adaUserName']; ?></font> dan nama <font class="text-danger"><?= $_SESSION['adaNameUser']; ?></font> sudah ada</p>
                </div>
                <div class="modal-body">
                    <form action="<?= URL; ?>/User_M/userAdd" method="POST">
                        <div class="form-group m-0">

                            <input type="hidden" name="level" value="<?= $_SESSION['adaLevel']; ?>">
                            <input type="text" value="<?= $_SESSION['adaPassword']; ?>" class="form-control" name="pass" id="password" placeholder="Masukkan password" required>
                            <input type="text" value="<?= $_SESSION['adaPassword1']; ?>" class="form-control" name="passUlang" id="ulangpassword" placeholder="Masukkan Ulang password" required>
                            <div class="form-group">
                                <label for="username">Nama Akun:</label>
                                <input type="text" class="form-control" value="<?= $_SESSION['adaUserName']; ?>" id="username" name="user" placeholder="Masukkan Username" required autocomplete="autocomplete">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama User:</label>
                                <input type="text" value="<?= $_SESSION['adaNameUser']; ?>" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required autocomplete="autocomplete">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <?php unset($_SESSION['gabung']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>