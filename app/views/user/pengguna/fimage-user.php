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
                        <div class="col-xl-12 col-lg-12 col-md-10 col-sm-10 col-8">

                            <div class="nav-tabs-container position-relative">
                                <ul class="nav nav-tabs tasks-header" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link tab-link active" id="jpg-tab3" data-toggle="tab" href="#jpg" role="tab" aria-controls="jpg" aria-selected="true"><i class="icon-image"></i>jpg</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="png-tab3" data-toggle="tab" href="#png" role="tab" aria-controls="png" aria-selected="false"><i class="icon-image"></i>png</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="jpeg-tab3" data-toggle="tab" href="#jpeg" role="tab" aria-controls="jpeg" aria-selected="false"><i class="icon-image"></i>jpeg</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="gif-tab3" data-toggle="tab" href="#gif" role="tab" aria-controls="gif" aria-selected="false"><i class="icon-image"></i>gif</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link" id="tiff-tab3" data-toggle="tab" href="#tiff" role="tab" aria-controls="tiff" aria-selected="false"><i class="icon-image"></i>tiff</a>
                                    </li>
                                </ul>

                                <div class="tasks-container tsk">
                                    <div class="tasksContainerScroll">
                                        <!-- Row start -->
                                        <div class="tab-content" id="myTabContent3" style="padding: .7rem;">
                                            <div class="tab-pane fade show active" id="jpg" role="tabpanel" aria-labelledby="jpg-tab3">
                                                <div class="baguetteBoxOne gallery">
                                                    <div class="row no-gutters justify-content-center">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="table-container border-0">
                                                                <div class="table-responsive">
                                                                    <table id="jpgTable" class="table custom-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">No.</th>
                                                                                <th class="text-center">Nama Gambar</th>
                                                                                <th class="text-center">Ekstensi</th>
                                                                                <th class="text-center">Ukuran</th>
                                                                                <th class="text-center">Tanggal Upload</th>
                                                                                <th class="text-center">Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $i = 1; ?>
                                                                            <?php foreach ($data['getImage'] as $image) : ?>
                                                                                <?php if ($image['ekstensi'] == 'jpg') : ?>
                                                                                    <tr>
                                                                                        <td class="text-center"><?= $i++; ?></td>
                                                                                        <td>
                                                                                            <a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $image['nama']; ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadfolderImage" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                                <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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

                                            <div class="tab-pane fade" id="png" role="tabpanel" aria-labelledby="png-tab3">
                                                <div class="baguetteBoxOne gallery">
                                                    <div class="row no-gutters justify-content-center">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="table-container border-0">
                                                                <div class="table-responsive">
                                                                    <table id="pngTable" class="table custom-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">No.</th>
                                                                                <th class="text-center">Nama Gambar</th>
                                                                                <th class="text-center">Ekstensi</th>
                                                                                <th class="text-center">Ukuran</th>
                                                                                <th class="text-center">Tanggal Upload</th>
                                                                                <th class="text-center">Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $i = 1; ?>
                                                                            <?php foreach ($data['getImage'] as $image) : ?>
                                                                                <?php if ($image['ekstensi'] == 'png') : ?>
                                                                                    <tr>
                                                                                        <td class="text-center"><?= $i++; ?></td>
                                                                                        <td>
                                                                                            <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadfolderImage" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                                <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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

                                            <div class="tab-pane fade" id="jpeg" role="tabpanel" aria-labelledby="jpeg-tab3">
                                                <div class="baguetteBoxOne gallery">
                                                    <div class="row no-gutters justify-content-center">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="table-container border-0">
                                                                <div class="table-responsive">
                                                                    <table id="jpegTable" class="table custom-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">No.</th>
                                                                                <th class="text-center">Nama Gambar</th>
                                                                                <th class="text-center">Ekstensi</th>
                                                                                <th class="text-center">Ukuran</th>
                                                                                <th class="text-center">Tanggal Upload</th>
                                                                                <th class="text-center">Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $i = 1; ?>
                                                                            <?php foreach ($data['getImage'] as $image) : ?>
                                                                                <?php if ($image['ekstensi'] == 'jpeg') : ?>
                                                                                    <tr>
                                                                                        <td class="text-center"><?= $i++; ?></td>
                                                                                        <td>
                                                                                            <a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadfolderImage" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                                <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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

                                            <div class="tab-pane fade" id="gif" role="tabpanel" aria-labelledby="gif-tab3">
                                                <div class="baguetteBoxOne gallery">
                                                    <div class="row no-gutters justify-content-center">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="table-container border-0">
                                                                <div class="table-responsive">
                                                                    <table id="gifTable" class="table custom-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">No.</th>
                                                                                <th class="text-center">Nama Gambar</th>
                                                                                <th class="text-center">Ekstensi</th>
                                                                                <th class="text-center">Ukuran</th>
                                                                                <th class="text-center">Tanggal Upload</th>
                                                                                <th class="text-center">Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $i = 1; ?>
                                                                            <?php foreach ($data['getImage'] as $image) : ?>
                                                                                <?php if ($image['ekstensi'] == 'gif') : ?>
                                                                                    <tr>
                                                                                        <td class="text-center"><?= $i++; ?></td>
                                                                                        <td>
                                                                                            <a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadfolderImage" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                                <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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

                                            <div class="tab-pane fade" id="tiff" role="tabpanel" aria-labelledby="tiff-tab3">
                                                <div class="baguetteBoxOne gallery">
                                                    <div class="row no-gutters justify-content-center">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="table-container border-0">
                                                                <div class="table-responsive">
                                                                    <table id="tiffTable" class="table custom-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">No.</th>
                                                                                <th class="text-center">Nama Gambar</th>
                                                                                <th class="text-center">Ekstensi</th>
                                                                                <th class="text-center">Ukuran</th>
                                                                                <th class="text-center">Tanggal Upload</th>
                                                                                <th class="text-center">Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $i = 1; ?>
                                                                            <?php foreach ($data['getImage'] as $image) : ?>
                                                                                <?php if ($image['ekstensi'] == 'tiff') : ?>
                                                                                    <tr>
                                                                                        <td class="text-center"><?= $i++; ?></td>
                                                                                        <td>
                                                                                            <a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadfolderImage" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                <input type="hidden" name="user" value="<?= $data['Getuser']['nama']; ?>">
                                                                                                <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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