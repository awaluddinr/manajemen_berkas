<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><?= $data['Getuser']['info']; ?></li>
            <li class="breadcrumb-item active">Audio</li>
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
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloAdaudioById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloAdaudioById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloAdaudioById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloAdaudioById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloAdaudioById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloAdaudioById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloAdaudioById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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
                                                                                        <a class="border-0 playAud" href="" data-toggle="modal" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['Getuser']['nama']; ?>/<?= $audio['nama'] ?>"><?= $audio['info']; ?>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                    <td class="text-center"><?= $audio['size']; ?></td>
                                                                                    <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                    <td class="text-center">
                                                                                        <form action="<?= URL; ?>/User/downloAdaudioById" class="mb-0" method="POST">
                                                                                            <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                            <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
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