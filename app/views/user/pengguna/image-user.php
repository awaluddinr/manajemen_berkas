<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><?= $data['Getuser']['info']; ?></li>
            <li class="breadcrumb-item active">Gambar</li>
        </ol>

        <ul class="app-actions">
            <li class="d-flex align-items-center">
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
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
                            <div class="labels-container lbl py-0">
                                <div class="labels-container lbl py-0">

                                    <div class="filters-block">
                                        <div class="filters">
                                            <?php if ($data['Getuser']['peran'] == 'footager') : ?>
                                                <form action="<?= URL; ?>/User/userfolder/" class="active p-0" method="POST">
                                                    <input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
                                                    <button type="submit" class="btn col-xl-12 text-lg-left">
                                                        <i class="icon-folder" style="color:#e0a318"></i> Folder
                                                    </button>
                                                </form>
                                                <!-- <a href="<?= URL; ?>/User/userimage/<?= $data['Getuser']['id']; ?>">
													<i class="icon-image" style="color:#366699"></i> Image
												</a> -->
                                                <form action="<?= URL; ?>/User/userimage/" class="active p-0" method="POST">
                                                    <input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
                                                    <button type="submit" class="btn col-xl-12 text-lg-left">
                                                        <i class="icon-image" style="color:#366699"></i> Image
                                                    </button>
                                                </form>
                                                <!-- <a href="<?= URL; ?>/User/uservideo/<?= $data['Getuser']['id']; ?>">
													<i class="icon-video" style="color:#338f50"></i> Video
												</a> -->
                                                <form action="<?= URL; ?>/User/uservideo/" class="active p-0" method="POST">
                                                    <input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
                                                    <button type="submit" class="btn col-xl-12 text-lg-left">
                                                        <i class="icon-video" style="color:#338f50"></i> Video
                                                    </button>
                                                </form>
                                                <!-- <a href="<?= URL; ?>/User/useraudio/<?= $data['Getuser']['id']; ?>">
													<i class="icon-music" style="color:#ba1d1d"></i> Audio
												</a> -->
                                                <form action="<?= URL; ?>/User/useraudio/" class="active p-0" method="POST">
                                                    <input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
                                                    <button type="submit" class="btn col-xl-12 text-lg-left">
                                                        <i class="icon-music" style="color:#ba1d1d"></i> Audio
                                                    </button>
                                                </form>
                                            <?php else : ?>
                                                <!-- <a href="<?= URL; ?>/User/userimage/<?= $data['Getuser']['id']; ?>">
													<i class="icon-image" style="color:#366699"></i> Image
												</a> -->
                                                <form action="<?= URL; ?>/User/userimage/" class="active p-0" method="POST">
                                                    <input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
                                                    <button type="submit" class="btn col-xl-12 text-lg-left">
                                                        <i class="icon-image" style="color:#366699"></i> Image
                                                    </button>
                                                </form>
                                                <!-- <a href="<?= URL; ?>/User/uservideo/<?= $data['Getuser']['id']; ?>">
													<i class="icon-video" style="color:#338f50"></i> Video
												</a> -->
                                                <form action="<?= URL; ?>/User/uservideo/" class="active p-0" method="POST">
                                                    <input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
                                                    <button type="submit" class="btn col-xl-12 text-lg-left">
                                                        <i class="icon-video" style="color:#338f50"></i> Video
                                                    </button>
                                                </form>
                                                <!-- <a href="<?= URL; ?>/User/useraudio/<?= $data['Getuser']['id']; ?>">
													<i class="icon-music" style="color:#ba1d1d"></i> Audio
												</a> -->
                                                <form action="<?= URL; ?>/User/useraudio/" class="active p-0" method="POST">
                                                    <input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
                                                    <button type="submit" class="btn col-xl-12 text-lg-left">
                                                        <i class="icon-music" style="color:#ba1d1d"></i> Audio
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">

                            <!-- <div class="tasks-header">
                                    <h3>Today <span class="date" id="todays-date"></span></h3>
                                </div> -->


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
                                                                                            <a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
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
                                                                                            <a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
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
                                                                                        <td><a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?></a></td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
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
                                                                                        <td><a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?></a></td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
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
                                                                                        <td><a class="border-0" href="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><?= $image['info']; ?></a></td>
                                                                                        <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                        <td class="text-center"><?= $image['size']; ?></td>
                                                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                        <td class="text-center">
                                                                                            <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
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