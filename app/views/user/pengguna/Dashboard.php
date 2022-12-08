<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboards</li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <!-- <ul class="app-actions">
            <li>
                <a href="#" id="reportrange">
                    <span class="range-text"></span>
                    <i class="icon-chevron-down"></i>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                    <i class="icon-print"></i>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                    <i class="icon-cloud_download"></i>
                </a>
            </li>
        </ul> -->
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <div class="row">
            <div class="modal modalsukses animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-size modal-dialog-centered">
                    <div class="modal-content">
                        <div class="mb-0 py-2">
                        </div>
                        <div class="modal-body text-center">
                            <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                            <h3 class="mb-3">Login Berhasil</h3>
                            <h5 class="text-success mb-1">Selamat Datang <?= $_SESSION['loginData']['info']; ?>.</h5>
                        </div>
                        <div class="modal-footer justify-content-center" style="padding: .5rem;">
                            <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row start -->
        <div class="row gutters">
            <?php if ($_SESSION['peran'] == 'footager') : ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4" style="background-color:#e0a318 ;">
                        <div class="info-icon" style="background-color:white ;">
                            <i class="icon-folder text-warning"></i>
                        </div>
                        <div class="sale-num">
                            <h4 class="text-white"><?= $data['jumlahFolder']; ?></h4>
                            <p class="text-white">Folder</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4" style="background-color:#366699;">
                        <div class="info-icon" style="background-color:white ;">
                            <i class="icon-photo" style="color:#366699;"></i>
                        </div>
                        <div class="sale-num">
                            <h4 class="text-white"><?= $data['jumlahGambar']; ?></h4>
                            <p class="text-white">Gambar</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4" style="background-color:#338f50 ;">
                        <div class="info-icon" style="background-color:white ;">
                            <i class="icon-photo" style="color:#338f50;"></i>
                        </div>
                        <div class="sale-num">
                            <h4 class="text-white"><?= $data['jumlahVideo']; ?></h4>
                            <p class="text-white">Video</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4" style="background-color:#ba1d1d ;">
                        <div class="info-icon" style="background-color:white ;">
                            <i class="icon-music" style="color:#ba1d1d ;"></i>
                        </div>
                        <div class="sale-num">
                            <h4 class="text-white"><?= $data['jumlahAudio']; ?></h4>
                            <p class="text-white">Audio</p>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4" style="background-color:#366699;">
                        <div class="info-icon" style="background-color:white ;">
                            <i class="icon-photo" style="color:#366699;"></i>
                        </div>
                        <div class="sale-num">
                            <h4 class="text-white"><?= $data['jumlahGambar']; ?></h4>
                            <p class="text-white">Gambar</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4" style="background-color:#338f50 ;">
                        <div class="info-icon" style="background-color:white ;">
                            <i class="icon-photo" style="color:#338f50;"></i>
                        </div>
                        <div class="sale-num">
                            <h4 class="text-white">0</h4>
                            <p class="text-white">Video</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4" style="background-color:#ba1d1d ;">
                        <div class="info-icon" style="background-color:white ;">
                            <i class="icon-music" style="color:#ba1d1d ;"></i>
                        </div>
                        <div class="sale-num">
                            <h4 class="text-white">0</h4>
                            <p class="text-white">Audio</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->