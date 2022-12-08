<div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
    <div class="documents-container">
        <div class="documents-header">
            <h3 class="d-flex flex-column">
                <?= $data['userid']['info']; ?>
                <small style="color: gray; font-size: 13px;"><?= strtoupper($data['userid']['peran']); ?></small>
            </h3>
        </div>
        <div class="documentsContainerScroll">
            <div class="documents-body">
                <!-- Row start -->
                <?php if ($data['userid']['peran'] == 'footager') : ?>
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="info-stats4" style="background-color:#e0a318 ;">
                                <div class="info-icon mb-0">
                                    <i class="icon-folder text-warning"></i>
                                </div>
                                <div class="stats-detail">
                                    <h4 class="text-white"><?= $data['jumlahFolder']; ?></h4>
                                    <p class="text-white">Folder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="info-stats4" style="background-color:#3d90e9;">
                                <div class="info-icon mb-0">
                                    <i class="icon-image text-primary"></i>
                                </div>
                                <div class="stats-detail">
                                    <h4 class="text-white"><?= $data['jumlahGambar']; ?></h4>
                                    <p class="text-white">Gambar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="info-tiles" style="background-color:#06bb3e ;">
                                <div class="info-icon mb-0">
                                    <i class="icon-video"></i>
                                </div>
                                <div class="stats-detail">
                                    <h4 class="text-white"><?= $data['jumlahVideo']; ?></h4>
                                    <p class="text-white">Video</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="info-tiles" style="background-color:#e40000 ;">
                                <div class="info-icon secondary">
                                    <i class="icon-music mb-0"></i>
                                </div>
                                <div class="stats-detail">
                                    <h4 class="text-white"><?= $data['jumlahAudio']; ?></h4>
                                    <p class="text-white">Audio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="info-stats4" style="background-color:#3d90e9;">
                                <div class="info-icon mb-0">
                                    <i class="icon-image text-primary"></i>
                                </div>
                                <div class="stats-detail">
                                    <h4 class="text-white"><?= $data['jumlahGambar']; ?></h4>
                                    <p class="text-white">Gambar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="info-tiles" style="background-color:#06bb3e ;">
                                <div class="info-icon mb-0">
                                    <i class="icon-video"></i>
                                </div>
                                <div class="stats-detail">
                                    <h4 class="text-white"><?= $data['jumlahVideo']; ?></h4>
                                    <p class="text-white">Video</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="info-tiles" style="background-color:#e40000 ;">
                                <div class="info-icon secondary">
                                    <i class="icon-music mb-0"></i>
                                </div>
                                <div class="stats-detail">
                                    <h4 class="text-white"><?= $data['jumlahAudio']; ?></h4>
                                    <p class="text-white">Audio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- Row end -->
            </div>
        </div>
    </div>
</div>
</div>
<!-- Row end -->
</div>
</div>
</div>
<!-- Row end -->

</div>