<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><?= $data['Getuser']['info']; ?></li>
            <li class="breadcrumb-item active">Video</li>
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
                        <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">

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
                                                                                        <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $video['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadvideoById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
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
                                                                                        <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $video['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadvideoById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
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
                                                                                        <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $video['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadvideoById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
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
                                                                                        <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $video['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadvideoById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
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
                                                                                        <a class="border-0 play" href="" data-toggle="modal" data-target=".modalplay" data-caption="<?= $video['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $video['nama'] ?>"><?= $video['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $video['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $video['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloadvideoById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaVid" value="<?= $video['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $video['id']; ?>">
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