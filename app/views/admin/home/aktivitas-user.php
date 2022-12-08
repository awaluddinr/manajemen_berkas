<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Aktivitas Pengguna</li>
    </ol>
</div>
<!-- Page header end -->

<div class="main-container">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Aktivitas Pengguna</div>
                </div>
                <form action="<?= URL; ?>/Home/cariAktivitas/" method="POST">

                    <div class="custom-search d-flex justify-content-center ">
                        <div class="input-group col-xl-8 py-1">
                            <?php if (isset($_SESSION['cari'])) : ?>
                                <input type="text" name="cari" class="form-control" value="<?php echo $_SESSION['cari']; ?>">
                            <?php else : ?>
                                <input type="text" name="cari" class="form-control">
                                <?php unset($_SESSION['cari']); ?>
                            <?php endif; ?>
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="tombolCari" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>

                </form>
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
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination secondary">
                            <?php if (!isset($_SESSION['cari'])) : ?>
                                <?php if ($data['halamanaktif'] > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= URL; ?>/Home/aktivitas/?page=<?= $data['halamanaktif'] - 1; ?>">
                                            <i class="icon-chevron-left"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = $data['start']; $i <= $data['end']; $i++) : ?>
                                    <?php if ($data['halamanaktif'] == $i) : ?>
                                        <li class="page-item active"><a class="page-link" href="<?= URL; ?>/Home/aktivitas/?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php else : ?>
                                        <li class="page-item"><a class="page-link" href="<?= URL; ?>/Home/aktivitas/?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <?php if ($data['halamanaktif'] < $data['jumlahpagination']) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= URL; ?>/Home/aktivitas/?page=<?= $data['halamanaktif'] + 1; ?>">
                                            <i class="icon-chevron-right"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if ($data['halamanaktif'] > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= URL; ?>/Home/cariAktivitas/?page=<?= $data['halamanaktif'] - 1; ?>">
                                            <i class="icon-chevron-left"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = $data['start']; $i <= $data['end']; $i++) : ?>
                                    <?php if ($data['halamanaktif'] == $i) : ?>
                                        <li class="page-item active"><a class="page-link" href="<?= URL; ?>/Home/cariAktivitas/?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php else : ?>
                                        <li class="page-item"><a class="page-link" href="<?= URL; ?>/Home/cariAktivitas/?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <?php if ($data['halamanaktif'] < $data['jumlahpagination']) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= URL; ?>/Home/cariAktivitas/?page=<?= $data['halamanaktif'] + 1; ?>">
                                            <i class="icon-chevron-right"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>