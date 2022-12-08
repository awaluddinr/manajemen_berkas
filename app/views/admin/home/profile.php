<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Profil Ku</li>
    </ol>
</div>
<!-- Page header end -->

<!-- Main container start -->
<div class="main-container">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">Update Profile</div>
                </div>
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <form action="<?= URL; ?>/Home/editProfile/" method="POST" enctype="multipart/form-data">
                                <div class="user-avatar">
                                    <div class="mb-0">
                                        <img src="<?= BASEURL; ?>/media/img/<?= $data['profile']['gambar']; ?>" alt="Le Rouge Admin" id="chosen-image" />
                                        <figcaption id="file-name"></figcaption>
                                        <input type="hidden" name="gambarlama" id="gambarlama" value="<?= $data['profile']['gambar']; ?>">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="file" name="img" accept=".jpg,.png" id="upload-button">
                                        <label class="uploadbtn" for="upload-button">
                                            <i class="icon-add"></i> &nbsp; Pilih Gambar
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-11 px-0">
                                    <div class="mb-0">
                                        <div class="form-group text-left">
                                            <label for="akun">Nama Akun</label>
                                            <input type="text" class="form-control" name="akun" id="akun" value="<?= $data['profile']['username']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-11 px-0">
                                    <div class="form-group text-left">
                                        <label for="nama">Nama User</label>
                                        <input type="text" class="form-control" name="info" id="nama" value="<?= $data['profile']['info']; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary col-xl-5 rounded-pill">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">Ganti Password</div>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">
                            <form action="<?= URL; ?>/Home/ubahpass/" method="post">
                                <div class="form-group">
                                    <label for="oldpass">Masukkan Password</label>
                                    <input type="password" class="form-control" name="oldpass" id="oldpass" placeholder="Masukkan Password Saat Ini">
                                </div>
                                <div class="form-group">
                                    <label for="newpass">Masukkan Password Baru</label>
                                    <input type="password" class="form-control" name="newpass" id="newpass" placeholder="Masukkan password baru anda">

                                </div>
                                <div class="form-group">
                                    <label for="newpass2">Ulangi Password Baru</label>
                                    <input type="password" class="form-control" name="newpass2" id="newpass2" placeholder="Ulangi password baru anda">
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary col-xl-5 rounded-pill">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Main container end -->


<div class="modal modalsuksesUbah animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="mb-0 py-2">
            </div>
            <?php if (isset($_SESSION['nochanges'])) : ?>
                <div class="modal-body text-center">
                    <i class="icon-info-with-circle text-warning d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Info</h3>
                    <h5>Tidak Ada Perubahan Pada Data</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
                <?php unset($_SESSION['nochanges']); ?>
            <?php else : ?>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5>Data Profil Berhasil DiUbah</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="modal modalgagalUbahPass animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="mb-0 py-2">
            </div>
            <?php if (isset($_SESSION['notpass'])) : ?>
                <div class="modal-body text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">Password Gagal Diubah</h5>
                    <p>Password Yang Anda Masukan Salah</p>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
                <?php unset($_SESSION['notpass']); ?>
            <?php elseif (isset($_SESSION['notmatch'])) : ?>
                <div class="modal-body text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">Password Gagal Diubah</h5>
                    <p>Password pada kolom 1 dan 2 tidak cocok</p>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
                <?php unset($_SESSION['notmatch']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="modal modalgagalEditprofile animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="mb-0 py-2">
            </div>
            <?php if (isset($_SESSION['username'])) : ?>
                <div class="modal-body text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">Username Gagal Diubah</h5>
                    <p>User dengan username <font class="text-danger"><?= $_SESSION['username']; ?></font> sudah ada</p>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
                <?php unset($_SESSION['username']); ?>
            <?php elseif (isset($_SESSION['nama'])) : ?>
                <div class="modal-body text-center">
                    <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Gagal</h3>
                    <h5 class="text-danger mb-2">Nama Gagal Diubah</h5>
                    <p>User dengan nama <font class="text-danger"><?= $_SESSION['nama']; ?></font> sudah ada</p>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
                <?php unset($_SESSION['nama']); ?>

            <?php endif; ?>
        </div>
    </div>
</div>