<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</div>
<!-- Page header end -->

<!-- Main container start -->
<div class="main-container">

    <div class="row">
        <div class="modal modalsuksesMasuk animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="mb-0 py-2">
                    </div>
                    <div class="modal-body text-center">
                        <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                        <h3 class="mb-2">Login Berhasil</h3>
                        <h5>Selamat Datang <?= $_SESSION['loginData']['info']; ?>.</h5>
                    </div>
                    <div class="modal-footer justify-content-center border-top-0" style="padding: .5rem;">
                        <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="info-tiles" style="background-color:#e0a318 ;">
                <div class="info-icon">
                    <i class="icon-folder text-warning"></i>
                </div>
                <div class="stats-detail">
                    <h2 class="text-white"><?= $data['jumlahFolder']; ?></h2>
                    <p class="text-white">Folder</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="info-tiles" style="background-color:#3d90e9;">
                <div class="info-icon">
                    <i class="icon-image text-primary"></i>
                </div>
                <div class="stats-detail">
                    <h2 class="text-white"><?= $data['jumlahGambar']; ?></h2>
                    <p class="text-white">Gambar</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="info-tiles" style="background-color:#06bb3e ;">
                <div class="info-icon">
                    <i class="icon-video"></i>
                </div>
                <div class="stats-detail">
                    <h2 class="text-white"><?= $data['jumlahVideo']; ?></h2>
                    <p class="text-white">Video</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="info-tiles" style="background-color:#e40000 ;">
                <div class="info-icon secondary">
                    <i class="icon-music"></i>
                </div>
                <div class="stats-detail">
                    <h2 class="text-white"><?= $data['jumlahAudio']; ?></h2>
                    <p class="text-white">Audio</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->

    <!-- Row starts -->
    <div class="row gutters">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-12">
            <div class="card">
                <div class="card-header activitas">
                    <div class="card-title">Aktivitas</div>
                </div>
                <?php if (count($data['history']) <= 0) : ?>
                    <div class="card-body">
                        <div class="mb-0">
                            <div class="timeline-activity">
                                <h5 class="text-danger text-center">Belum ada aktivitas !!!</h5>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="card-body">
                        <div class="mb-0">
                            <div class="timeline-activity">
                                <?php foreach ($data['history'] as $log) : ?>
                                    <div class="activity-log">
                                        <?php if ($log['idUser'] == $_SESSION['loginData']['id']) : ?>
                                            <p class="log-name">anda<small class="log-time"><?= Helper::facebook_time_ago($log['waktu']); ?></small></p>
                                        <?php else : ?>
                                            <p class="log-name"><?= $log['namaUser']; ?><small class="log-time"><?= Helper::facebook_time_ago($log['waktu']); ?></small></p>
                                        <?php endif; ?>
                                        <div class="log-details"><?= $log['pesan']; ?></div>
                                    </div>
                                <?php endforeach; ?>
                                <?php if (count($data['history']) !== 1 && count($data['history']) !== 2) : ?>
                                    <a href="<?= URL; ?>/Home/aktivitas">
                                        <span class="menu-text text-primary">Lihat Selengkapnya....</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if (count($data['user']) <= 0) : ?>
            <div class="col-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="card h-310">
                    <div class="card-header daftar">
                        <div class="card-title">Daftar Pengguna</div>
                    </div>
                    <div class="card-body">
                        <div class="customScroll5 d-flex justify-content-center mt-5">
                            <div class="top-agents-container">
                                <h1 class="text-center text-danger">Data Masih Kosong !!!</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="col-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header daftar">
                        <div class="card-title">Daftar Pengguna</div>
                    </div>
                    <div class="card-body">
                        <div class="mb-0">
                            <div class="top-agents-container">
                                <?php foreach ($data['user'] as $user) : ?>
                                    <div class="top-agent">
                                        <img src="<?= BASEURL; ?>/media/img/<?= $user['gambar']; ?>" class="avatar" alt="Agent" />
                                        <div class="agent-details">
                                            <h6><?= $user['nama']; ?></h6>
                                            <div class="agent-score">
                                                <div class="points">
                                                    <div class="left"><?= $user['peran']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php if (count($data['user']) !== 1 && count($data['user']) !== 2) : ?>
                                    <a href="<?= URL; ?>/Home/Kelola_User">
                                        <span class="menu-text text-primary">Lihat Selengkapnya....</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- Row end -->

</div>
<!-- Main container end -->