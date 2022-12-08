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
            <!-- <li class="breadcrumb-item active"><?= $data['folderinfo']['infoFolder']; ?></li> -->
        </ol>

        <ul class="app-actions">
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/userfolder_image" method="POST">
                    <input type="hidden" name="idUser" value="<?= $_SESSION['id'] = $data['Getuser']['id']; ?>">
                    <input type="hidden" name="idFolder" value="<?= $_SESSION['idFolder'] = $data['folderinfo']['id']; ?>" id="fdr">
                    <button type="submit" class="border-0 bg-transparent d-flex align-items-center text-white px-1 mx-2">
                        Gambar
                        <i class="icon-image ml-1"></i>
                    </button>
                </form>
            </li>
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/userfolder_video/" method="POST">
                    <input type="hidden" name="idUser" value="<?= $_SESSION['id'] = $data['Getuser']['id']; ?>">
                    <input type="hidden" name="idFolder" value="<?= $_SESSION['idFolder'] = $data['folderinfo']['id']; ?>" id="fdr">
                    <button type="submit" class="border-0 bg-transparent d-flex align-items-center text-white px-1 mx-2">
                        Video
                        <i class="icon-video ml-1"></i>
                    </button>
                </form>
            </li>
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/userfolder_audio/" method="POST">
                    <input type="hidden" name="idUser" value="<?= $_SESSION['id'] = $data['Getuser']['id']; ?>">
                    <input type="hidden" name="idFolder" value="<?= $_SESSION['idFolder'] = $data['folderinfo']['id']; ?>" id="fdr">
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

                        <div class="col-xl-12 col-lg-12 col-md-10 col-sm-10 col-8">

                            <!-- <div class="tasks-header">
                                    <h3>Today <span class="date" id="todays-date"></span></h3>
                                </div> -->


                            <div class="nav-tabs-container position-relative">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link tab-link active" id="mp3-tab3" data-toggle="tab" href="#mp3" role="tab" aria-controls="mp3" aria-selected="true"><i class="icon-queue_music"></i>mp3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="wav-tab3" data-toggle="tab" href="#wav" role="tab" aria-controls="wav" aria-selected="false"><i class="icon-queue_music"></i>wav</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="aac-tab3" data-toggle="tab" href="#aac" role="tab" aria-controls="aac" aria-selected="false"><i class="icon-queue_music"></i>aac</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="wma-tab3" data-toggle="tab" href="#wma" role="tab" aria-controls="wma" aria-selected="false"><i class="icon-queue_music"></i>wma</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="pcm-tab3" data-toggle="tab" href="#pcm" role="tab" aria-controls="pcm" aria-selected="false"><i class="icon-queue_music"></i>pcm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="flac-tab3" data-toggle="tab" href="#flac" role="tab" aria-controls="flac" aria-selected="false"><i class="icon-queue_music"></i>flac</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="aiff-tab3" data-toggle="tab" href="#aiff" role="tab" aria-controls="aiff" aria-selected="false"><i class="icon-queue_music"></i>aiff</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="ogg-tab3" data-toggle="tab" href="#ogg" role="tab" aria-controls="ogg" aria-selected="false"><i class="icon-queue_music"></i>ogg</a>
                                    </li>
                                </ul>
                                <div class="tasks-container tsk">
                                    <div class="tasksContainerScroll">
                                        <!-- Row start -->
                                        <div class="tab-content" id="myTabContent3" style="padding: .7rem;">
                                            <div class="tab-pane fade show active" id="mp3" role="tabpanel" aria-labelledby="mp3-tab3">
                                                <div class="row no-gutters justify-content-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="table-container border-0">
                                                            <div class="table-responsive">
                                                                <table id="jpgTable" class="table custom-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">No.</th>
                                                                            <th class="text-center">Nama Audio</th>
                                                                            <th class="text-center">Ekstensi</th>
                                                                            <th class="text-center">Ukuran</th>
                                                                            <th class="text-center">Tanggal Upload</th>
                                                                            <th class="text-center">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                            <?php if ($audio['ekstensi'] == 'mp3') : ?>
                                                                                <tr>
                                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                                    <td>
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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

                                            <div class="tab-pane fade" id="wav" role="tabpanel" aria-labelledby="wav-tab3">
                                                <div class="row no-gutters justify-content-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="table-container border-0">
                                                            <div class="table-responsive">
                                                                <table id="pngTable" class="table custom-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">No.</th>
                                                                            <th class="text-center">Nama Audio</th>
                                                                            <th class="text-center">Ekstensi</th>
                                                                            <th class="text-center">Ukuran</th>
                                                                            <th class="text-center">Tanggal Upload</th>
                                                                            <th class="text-center">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                            <?php if ($audio['ekstensi'] == 'wav') : ?>
                                                                                <tr>
                                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                                    <td>
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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

                                            <div class="tab-pane fade" id="aac" role="tabpanel" aria-labelledby="aac-tab3">
                                                <div class="row no-gutters justify-content-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="table-container border-0">
                                                            <div class="table-responsive">
                                                                <table id="jpegTable" class="table custom-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">No.</th>
                                                                            <th class="text-center">Nama Audio</th>
                                                                            <th class="text-center">Ekstensi</th>
                                                                            <th class="text-center">Ukuran</th>
                                                                            <th class="text-center">Tanggal Upload</th>
                                                                            <th class="text-center">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                            <?php if ($audio['ekstensi'] == 'aac') : ?>
                                                                                <tr>
                                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                                    <td>
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                            <div class="tab-pane fade" id="wma" role="tabpanel" aria-labelledby="wma-tab3">
                                                <div class="row no-gutters justify-content-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="table-container border-0">
                                                            <div class="table-responsive">
                                                                <table id="tiffTable" class="table custom-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">No.</th>
                                                                            <th class="text-center">Nama Audio</th>
                                                                            <th class="text-center">Ekstensi</th>
                                                                            <th class="text-center">Ukuran</th>
                                                                            <th class="text-center">Tanggal Upload</th>
                                                                            <th class="text-center">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                            <?php if ($audio['ekstensi'] == 'wma') : ?>
                                                                                <tr>
                                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                                    <td>
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                            <div class="tab-pane fade" id="pcm" role="tabpanel" aria-labelledby="pcm-tab3">
                                                <div class="row no-gutters justify-content-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="table-container border-0">
                                                            <div class="table-responsive">
                                                                <table id="pcmTable" class="table custom-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">No.</th>
                                                                            <th class="text-center">Nama Audio</th>
                                                                            <th class="text-center">Ekstensi</th>
                                                                            <th class="text-center">Ukuran</th>
                                                                            <th class="text-center">Tanggal Upload</th>
                                                                            <th class="text-center">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                            <?php if ($audio['ekstensi'] == 'pcm') : ?>
                                                                                <tr>
                                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                                    <td>
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                            <div class="tab-pane fade" id="flac" role="tabpanel" aria-labelledby="flac-tab3">
                                                <div class="row no-gutters justify-content-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="table-container border-0">
                                                            <div class="table-responsive">
                                                                <table id="flacTable" class="table custom-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">No.</th>
                                                                            <th class="text-center">Nama Audio</th>
                                                                            <th class="text-center">Ekstensi</th>
                                                                            <th class="text-center">Ukuran</th>
                                                                            <th class="text-center">Tanggal Upload</th>
                                                                            <th class="text-center">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                            <?php if ($audio['ekstensi'] == 'flac') : ?>
                                                                                <tr>
                                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                                    <td>
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                            <div class="tab-pane fade" id="aiff" role="tabpanel" aria-labelledby="aiff-tab3">
                                                <div class="row no-gutters justify-content-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="table-container border-0">
                                                            <div class="table-responsive">
                                                                <table id="aiffTable" class="table custom-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">No.</th>
                                                                            <th class="text-center">Nama Audio</th>
                                                                            <th class="text-center">Ekstensi</th>
                                                                            <th class="text-center">Ukuran</th>
                                                                            <th class="text-center">Tanggal Upload</th>
                                                                            <th class="text-center">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                            <?php if ($audio['ekstensi'] == 'aiff') : ?>
                                                                                <tr>
                                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                                    <td>
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                            <div class="tab-pane fade" id="ogg" role="tabpanel" aria-labelledby="ogg-tab3">
                                                <div class="row no-gutters justify-content-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="table-container border-0">
                                                            <div class="table-responsive">
                                                                <table id="oggTable" class="table custom-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center">No.</th>
                                                                            <th class="text-center">Nama Audio</th>
                                                                            <th class="text-center">Ekstensi</th>
                                                                            <th class="text-center">Ukuran</th>
                                                                            <th class="text-center">Tanggal Upload</th>
                                                                            <th class="text-center">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                            <?php if ($audio['ekstensi'] == 'ogg') : ?>
                                                                                <tr>
                                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                                    <td>
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
    <div class="modal modalplayAud x fade p-0" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered x">
            <div class="modal-content position-relative x border-0">
                <div class="modal-header px-5 position-absolute x" style="right: 29%; top: -10%; z-index: 99;">
                    <h5 class="modal-title" id=""></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="play d-flex justify-content-center">
                        <div class="audio text-center">
                            <div class="gif text-center mb-2">
                                <img src="<?= BASEURL; ?>/media/img/awal.gif" alt="" width="250" height="50" id="img">
                            </div>
                            <audio src="" height="450" width="850" id="player" class="playerAud" controls controlslist="nodownload" autoplay></audio>
                            <div class="aud text-center mt-2">
                                <marquee class="title py-1 text-white x captionAud" id="caption" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" width="50%" behavior="scroll" direction="" scrolldelay="500">
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>