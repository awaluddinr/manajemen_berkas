<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item">Postingan Pengguna</li> -->
            <li class="breadcrumb-item">
                <form action="<?= URL; ?>/User/userfolder/" method="POST">
                    <input type="hidden" name="idFolder" value="<?= $data['folderinfo']['id_user']; ?>">
                    <button type="submit" class="btn">
                        <i class="icon-reply-all text-white" style="font-size: 15px;"></i>
                        <p class="mb-0 text-white">Kembali</p>
                    </button>
                </form>
            </li>
            <!-- <li class="breadcrumb-item active"><?= $data['folderinfo']['info']; ?></li> -->
        </ol>

        <ul class="app-actions">
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/userfolder_image" method="POST">
                    <input type="hidden" name="idUser" value="<?= $data['Getuser']['id']; ?>">
                    <input type="hidden" name="idFolder" value="<?= $data['folderinfo']['id']; ?>" id="fdr">
                    <button type="submit" class="border-0 bg-transparent d-flex align-items-center text-white px-1 mx-2">
                        Gambar
                        <i class="icon-image ml-1"></i>
                    </button>
                </form>
            </li>
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/userfolder_video/" method="POST">
                    <input type="hidden" name="idUser" value="<?= $data['Getuser']['id']; ?>">
                    <input type="hidden" name="idFolder" value="<?= $data['folderinfo']['id']; ?>" id="fdr">
                    <button type="submit" class="border-0 bg-transparent d-flex align-items-center text-white px-1 mx-2">
                        Video
                        <i class="icon-video ml-1"></i>
                    </button>
                </form>
            </li>
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/userfolder_audio/" method="POST">
                    <input type="hidden" name="idUser" value="<?= $data['Getuser']['id']; ?>">
                    <input type="hidden" name="idFolder" value="<?= $data['folderinfo']['id']; ?>" id="fdr">
                    <button type="submit" class="border-0 bg-transparent d-flex align-items-center text-white px-1 mx-2">
                        Audio
                        <i class="icon-music ml-1"></i>
                    </button>
                </form>
            </li>
        </ul>
    </div>
    <!-- Page header end -->



    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="task-section">
                    <!-- Row start -->
                    <div class="row no-gutters">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-10 col-8">

                        <!-- <div class="tasks-header">
                                    <h3>Today <span class="date" id="todays-date"></span></h3>
                                </div> -->
                        <div class="nav-tabs-container position-relative">
                            <ul class="nav nav-tabs tasks-header" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link tab-link active" id="mp4-tab3" data-toggle="tab" href="#mp4" role="tab" aria-controls="mp4" aria-selected="true"><i class="icon-video"></i>mp4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link" id="mov-tab3" data-toggle="tab" href="#mov" role="tab" aria-controls="mov" aria-selected="false"><i class="icon-video"></i>MOV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link" id="mkv-tab3" data-toggle="tab" href="#mkv" role="tab" aria-controls="mkv" aria-selected="false"><i class="icon-video"></i>mkv</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link" id="mts-tab3" data-toggle="tab" href="#mts" role="tab" aria-controls="mts" aria-selected="false"><i class="icon-video"></i>MTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link" id="avi-tab3" data-toggle="tab" href="#avi" role="tab" aria-controls="avi" aria-selected="false"><i class="icon-video"></i>avi</a>
                                </li>
                            </ul>
                            <div class="tasks-container tsk">
                                <div class="tasksContainerScroll">
                                    <!-- Row start -->
                                    <div class="tab-content" id="myTabContent3" style="padding: .7rem;">
                                        <div class="tab-pane fade show active" id="mp4" role="tabpanel" aria-labelledby="mp4-tab3">
                                            <div class="row no-gutters justify-content-center">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="table-container border-0">
                                                        <div class="table-responsive">
                                                            <table id="jpgTable" class="table custom-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">No.</th>
                                                                        <th class="text-center">Nama Video</th>
                                                                        <th class="text-center">Ekstensi</th>
                                                                        <th class="text-center">Ukuran</th>
                                                                        <th class="text-center">Tanggal Upload</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1; ?>
                                                                    <?php foreach ($data['getVideo'] as $video) : ?>
                                                                        <?php if ($video['ekstensi'] == 'mp4') : ?>
                                                                            <tr>
                                                                                <td class="text-center"><?= $i++; ?></td>
                                                                                <td>
                                                                                    <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder'] ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                <td class="text-center"><?= $video['size']; ?></td>
                                                                                <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                <td class="text-center">
                                                                                    <form action="<?= URL; ?>/User/downloadfolderVideo" class="mb-0" method="POST">
                                                                                        <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                        <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
                                                                                        <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
                                                                                        <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                            <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                        </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="mov" role="tabpanel" aria-labelledby="mov-tab3">
                                            <div class="row no-gutters justify-content-center">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="table-container border-0">
                                                        <div class="table-responsive">
                                                            <table id="pngTable" class="table custom-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">No.</th>
                                                                        <th class="text-center">Nama Video</th>
                                                                        <th class="text-center">Ekstensi</th>
                                                                        <th class="text-center">Ukuran</th>
                                                                        <th class="text-center">Tanggal Upload</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1; ?>
                                                                    <?php foreach ($data['getVideo'] as $video) : ?>
                                                                        <?php if ($video['ekstensi'] == 'MOV') : ?>
                                                                            <tr>
                                                                                <td class="text-center"><?= $i++; ?></td>
                                                                                <td>
                                                                                    <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder'] ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                <td class="text-center"><?= $video['size']; ?></td>
                                                                                <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                <td class="text-center">
                                                                                    <form action="<?= URL; ?>/User/downloadfolderVideo" class="mb-0" method="POST">
                                                                                        <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                        <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
                                                                                        <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
                                                                                        <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                            <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                        </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="mkv" role="tabpanel" aria-labelledby="mkv-tab3">
                                            <div class="row no-gutters justify-content-center">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="table-container border-0">
                                                        <div class="table-responsive">
                                                            <table id="jpegTable" class="table custom-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">No.</th>
                                                                        <th class="text-center">Nama Video</th>
                                                                        <th class="text-center">Ekstensi</th>
                                                                        <th class="text-center">Ukuran</th>
                                                                        <th class="text-center">Tanggal Upload</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1; ?>
                                                                    <?php foreach ($data['getVideo'] as $video) : ?>
                                                                        <?php if ($video['ekstensi'] == 'mkv') : ?>
                                                                            <tr>
                                                                                <td class="text-center"><?= $i++; ?></td>
                                                                                <td>
                                                                                    <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder'] ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                <td class="text-center"><?= $video['size']; ?></td>
                                                                                <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                <td class="text-center">
                                                                                    <form action="<?= URL; ?>/User/downloadfolderVideo" class="mb-0" method="POST">
                                                                                        <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                        <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
                                                                                        <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
                                                                                        <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                            <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                        </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="mts" role="tabpanel" aria-labelledby="mts-tab3">
                                            <div class="row no-gutters justify-content-center">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="table-container border-0">
                                                        <div class="table-responsive">
                                                            <table id="gifTable" class="table custom-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">No.</th>
                                                                        <th class="text-center">Nama Video</th>
                                                                        <th class="text-center">Ekstensi</th>
                                                                        <th class="text-center">Ukuran</th>
                                                                        <th class="text-center">Tanggal Upload</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1; ?>
                                                                    <?php foreach ($data['getVideo'] as $video) : ?>
                                                                        <?php if ($video['ekstensi'] == 'MTS') : ?>
                                                                            <tr>
                                                                                <td class="text-center"><?= $i++; ?></td>
                                                                                <td>
                                                                                    <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder'] ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                <td class="text-center"><?= $video['size']; ?></td>
                                                                                <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                <td class="text-center">
                                                                                    <form action="<?= URL; ?>/User/downloadfolderVideo" class="mb-0" method="POST">
                                                                                        <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                        <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
                                                                                        <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
                                                                                        <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                            <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                        </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="avi" role="tabpanel" aria-labelledby="avi-tab3">
                                            <div class="row no-gutters justify-content-center">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="table-container border-0">
                                                        <div class="table-responsive">
                                                            <table id="tiffTable" class="table custom-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">No.</th>
                                                                        <th class="text-center">Nama Video</th>
                                                                        <th class="text-center">Ekstensi</th>
                                                                        <th class="text-center">Ukuran</th>
                                                                        <th class="text-center">Tanggal Upload</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1; ?>
                                                                    <?php foreach ($data['getVideo'] as $video) : ?>
                                                                        <?php if ($video['ekstensi'] == 'avi') : ?>
                                                                            <tr>
                                                                                <td class="text-center"><?= $i++; ?></td>
                                                                                <td>
                                                                                    <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder'] ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                <td class="text-center"><?= $video['size']; ?></td>
                                                                                <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                <td class="text-center">
                                                                                    <form action="<?= URL; ?>/User/downloadfolderVideo" class="mb-0" method="POST">
                                                                                        <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                        <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
                                                                                        <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
                                                                                        <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                            <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                        </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
<!-- Content wrapper end -->

<!-- modal info -->
<div class="modal modalplay fade p-0" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl x">
        <div class="modal-content x">
            <div class="modal-header x px-5">
                <h5 class="modal-title" id=""></h5>
                <button type="button" class="close x" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="play d-flex justify-content-center">
                    <div class="vid">
                        <video src="" height="450" width="850" id="player" controls controlslist="nodownload" autoplay></video>
                        <h5 class="title py-1 text-white" id="caption"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>