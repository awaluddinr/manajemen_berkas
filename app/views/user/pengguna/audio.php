<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Manajemen File</li>
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
            <div class="col-xl-12 mb-5 px-3">
                <form action="<?= URL; ?>/User/pageAudio_search/" method="POST">
                    <div class="custom-search d-flex justify-content-center ">
                        <div class="input-group col-xl-8 py-1">

                            <input type="text" name="cariaudio" class="form-control">

                            <div class="input-group-append">
                                <button class="btn btn-primary" name="tombolCari" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="accordion toggle-icons lg" id="toggleIcons">
                    <div class="accordion-container" style=" background: #767676a1; border-radius: 5px 5px 0 0; box-shadow: 0px -1px 15px rgba(0, 0, 0, 0.311) ;">
                        <div class="accordion-header" id="toggleIconsOne">
                            <a href="" class="text-dark" data-toggle="collapse" data-target="#toggleIconsCollapseOne" aria-expanded="true" aria-controls="toggleIconsCollapseOne">
                                Upload Audio <font class="text-info"><u>(klik disini)</u></font>
                            </a>
                        </div>
                        <div id="toggleIconsCollapseOne" class="collapse" aria-labelledby="toggleIconsOne" data-parent="#toggleIcons">
                            <div class="accordion-body">
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 text-center mx-auto my-auto">
                                    <!-- <form id="uploadForm" class="d-block" action="<?= URL; ?>/User/addAudio" method="POST" enctype="multipart/form-data">
                                        <label for="uploadAud">
                                            <div class="wrapper">
                                                <i class="icon-upload-to-cloud" aria-hidden="true"></i>
                                                <input type="file" id="uploadAud" name="uploadAudio" data-height="100" required accept=".mp3,.wav,.aac,.wma,.pcm,.flac,.aiff,.ogg">
                                                <p id="fileName"></p>
                                            </div>
                                            <button type="submit" class="btn my-3 col-xl-3 tombol rounded-pill" name="change_bitrate">
                                                <p class="mb-0 my-auto font-weight-bold">
                                                    <i class="icon-upload-cloud mr-2" style="font-size: 17px; "></i>
                                                    <span style="font-size: 17px; ">Upload</span>
                                                </p>
                                            </button>
                                        </label>
                                    </form> -->
                                    <form action="<?= URL; ?>/User/addAudio" class="dropzone gbr" id="audioDrop">
                                    </form>
                                    <button type="submit" class="btn my-3 col-xl-3 tombol rounded-pill" name="tombol" id="tombolAud">
                                        <p class="mb-0 my-auto font-weight-bold">
                                            <i class="icon-upload-cloud mr-2" style="font-size: 17px; "></i>
                                            <span style="font-size: 17px; ">Upload</span>
                                        </p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <div class="nav-tabs-container" style="box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.311) ;">
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
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade show active" id="mp3" role="tabpanel" aria-labelledby="mp3-tab3">
                            <div class="row">
                                <div class="col-xl-12 col-lg-2 col-md-3 col-sm-4 col-6 position-relative d-flex flex-wrap">
                                    <?php foreach ($data['audioShow'] as $audio) : ?>
                                        <?php if ($audio['ekstensi'] == 'mp3') : ?>
                                            <div class="col-xl-4 mt-2">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadAudio/" method="POST">
                                                            <input type="hidden" name="audioUser" value="<?= $audio['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Unduh</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between editbtnAud" data-toggle="modal" data-target=".modaleditAud" data-edit="<?= $audio['info']; ?>" data-idaudio="<?= $audio['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/AudhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $audio['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnAud" data-toggle="modal" data-target=".modalDeleteAud" data-audio="<?= $audio['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between audiobtn" data-toggle="modal" data-target=".modalaudio" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($audio['created_at'])); ?>" data-audio="<?= $audio['info']; ?>" data-size="<?= $audio['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                                    <figure class="mb-0 text-center">
                                                        <figcaption class="text-center">
                                                            <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                        </figcaption>
                                                        <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $audio['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                                    </figure>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="wav" role="tabpanel" aria-labelledby="wav-tab3">
                            <div class="row">
                                <div class="col-xl-12 col-lg-2 col-md-3 col-sm-4 col-6 position-relative d-flex flex-wrap">
                                    <?php foreach ($data['audioShow'] as $audio) : ?>
                                        <?php if ($audio['ekstensi'] == 'wav') : ?>
                                            <div class="col-xl-4 mt-2">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadAudio/" method="POST">
                                                            <input type="hidden" name="audioUser" value="<?= $audio['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Unduh</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between editbtnAud" data-toggle="modal" data-target=".modaleditAud" data-edit="<?= $audio['info']; ?>" data-idaudio="<?= $audio['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/AudhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $audio['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnAud" data-toggle="modal" data-target=".modalDeleteAud" data-audio="<?= $audio['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between audiobtn" data-toggle="modal" data-target=".modalaudio" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($audio['created_at'])); ?>" data-audio="<?= $audio['info']; ?>" data-size="<?= $audio['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                                    <figure class="mb-0 text-center">
                                                        <figcaption class="text-center">
                                                            <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                        </figcaption>
                                                        <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $audio['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                                    </figure>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="aac" role="tabpanel" aria-labelledby="aac-tab3">
                            <div class="row">
                                <div class="col-xl-12 col-lg-2 col-md-3 col-sm-4 col-6 position-relative d-flex flex-wrap">
                                    <?php foreach ($data['audioShow'] as $audio) : ?>
                                        <?php if ($audio['ekstensi'] == 'aac') : ?>
                                            <div class="col-xl-4 mt-2">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadAudio/" method="POST">
                                                            <input type="hidden" name="audioUser" value="<?= $audio['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Unduh</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between editbtnAud" data-toggle="modal" data-target=".modaleditAud" data-edit="<?= $audio['info']; ?>" data-idaudio="<?= $audio['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/AudhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $audio['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnAud" data-toggle="modal" data-target=".modalDeleteAud" data-audio="<?= $audio['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between audiobtn" data-toggle="modal" data-target=".modalaudio" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($audio['created_at'])); ?>" data-audio="<?= $audio['info']; ?>" data-size="<?= $audio['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                                    <figure class="mb-0 text-center">
                                                        <figcaption class="text-center">
                                                            <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                        </figcaption>
                                                        <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $audio['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                                    </figure>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wma" role="tabpanel" aria-labelledby="wma-tab3">
                            <div class="row">
                                <div class="col-xl-12 col-lg-2 col-md-3 col-sm-4 col-6 position-relative d-flex flex-wrap">
                                    <?php foreach ($data['audioShow'] as $audio) : ?>
                                        <?php if ($audio['ekstensi'] == 'wma') : ?>
                                            <div class="col-xl-4 mt-2">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadAudio/" method="POST">
                                                            <input type="hidden" name="audioUser" value="<?= $audio['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Unduh</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between editbtnAud" data-toggle="modal" data-target=".modaleditAud" data-edit="<?= $audio['info']; ?>" data-idaudio="<?= $audio['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/AudhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $audio['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnAud" data-toggle="modal" data-target=".modalDeleteAud" data-audio="<?= $audio['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between audiobtn" data-toggle="modal" data-target=".modalaudio" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($audio['created_at'])); ?>" data-audio="<?= $audio['info']; ?>" data-size="<?= $audio['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                                    <figure class="mb-0 text-center">
                                                        <figcaption class="text-center">
                                                            <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                        </figcaption>
                                                        <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $audio['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                                    </figure>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pcm" role="tabpanel" aria-labelledby="pcm-tab3">
                            <div class="row">
                                <div class="col-xl-12 col-lg-2 col-md-3 col-sm-4 col-6 position-relative d-flex flex-wrap">
                                    <?php foreach ($data['audioShow'] as $audio) : ?>
                                        <?php if ($audio['ekstensi'] == 'pcm') : ?>
                                            <div class="col-xl-4 mt-2">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadAudio/" method="POST">
                                                            <input type="hidden" name="audioUser" value="<?= $audio['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Unduh</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between editbtnAud" data-toggle="modal" data-target=".modaleditAud" data-edit="<?= $audio['info']; ?>" data-idaudio="<?= $audio['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/AudhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $audio['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnAud" data-toggle="modal" data-target=".modalDeleteAud" data-audio="<?= $audio['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between audiobtn" data-toggle="modal" data-target=".modalaudio" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($audio['created_at'])); ?>" data-audio="<?= $audio['info']; ?>" data-size="<?= $audio['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                                    <figure class="mb-0 text-center">
                                                        <figcaption class="text-center">
                                                            <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                        </figcaption>
                                                        <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $audio['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                                    </figure>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="flac" role="tabpanel" aria-labelledby="flac-tab3">
                            <?php foreach ($data['audioShow'] as $audio) : ?>
                                <?php if ($audio['ekstensi'] == 'flac') : ?>
                                    <div class="col-xl-4 mt-2">
                                        <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                            <li>
                                                <form action="<?= URL; ?>/User/downloadAudio/" method="POST">
                                                    <input type="hidden" name="audioUser" value="<?= $audio['nama']; ?>">
                                                    <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                        <span class="my-auto">Unduh</span>
                                                        <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between editbtnAud" data-toggle="modal" data-target=".modaleditAud" data-edit="<?= $audio['info']; ?>" data-idaudio="<?= $audio['id']; ?>" href="buttons.html">
                                                    <span class="my-auto">Sunting</span>
                                                    <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between" href="<?= URL; ?>/User/AudhapusTemp/<?= $audio['id']; ?>">
                                                    <span class="my-auto">Hapus</span>
                                                    <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnAud" data-toggle="modal" data-target=".modalDeleteAud" data-audio="<?= $audio['id']; ?>">
                                                    <span class="my-auto">Hapus Permanen</span>
                                                    <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between audiobtn" data-toggle="modal" data-target=".modalaudio" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($audio['created_at'])); ?>" data-audio="<?= $audio['info']; ?>" data-size="<?= $audio['size']; ?>">
                                                    <span class="my-auto">Info</span>
                                                    <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                            <figure class="mb-0 text-center">
                                                <figcaption class="text-center">
                                                    <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                </figcaption>
                                                <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $audio['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                            </figure>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="tab-pane fade" id="aiff" role="tabpanel" aria-labelledby="aiff-tab3">
                            <?php foreach ($data['audioShow'] as $audio) : ?>
                                <?php if ($audio['ekstensi'] == 'aiff') : ?>
                                    <div class="col-xl-4 mt-2">
                                        <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                            <li>
                                                <form action="<?= URL; ?>/User/downloadAudio/" method="POST">
                                                    <input type="hidden" name="audioUser" value="<?= $audio['nama']; ?>">
                                                    <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                        <span class="my-auto">Unduh</span>
                                                        <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between editbtnAud" data-toggle="modal" data-target=".modaleditAud" data-edit="<?= $audio['info']; ?>" data-idaudio="<?= $audio['id']; ?>" href="buttons.html">
                                                    <span class="my-auto">Sunting</span>
                                                    <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between" href="<?= URL; ?>/User/AudhapusTemp/<?= $audio['id']; ?>">
                                                    <span class="my-auto">Hapus</span>
                                                    <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnAud" data-toggle="modal" data-target=".modalDeleteAud" data-audio="<?= $audio['id']; ?>">
                                                    <span class="my-auto">Hapus Permanen</span>
                                                    <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between audiobtn" data-toggle="modal" data-target=".modalaudio" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($audio['created_at'])); ?>" data-audio="<?= $audio['info']; ?>" data-size="<?= $audio['size']; ?>">
                                                    <span class="my-auto">Info</span>
                                                    <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                            <figure class="mb-0 text-center">
                                                <figcaption class="text-center">
                                                    <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                </figcaption>
                                                <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $audio['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                            </figure>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="tab-pane fade" id="ogg" role="tabpanel" aria-labelledby="ogg-tab3">
                            <?php foreach ($data['audioShow'] as $audio) : ?>
                                <?php if ($audio['ekstensi'] == 'ogg') : ?>
                                    <div class="col-xl-4 mt-2">
                                        <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                            <li>
                                                <form action="<?= URL; ?>/User/downloadAudio/" method="POST">
                                                    <input type="hidden" name="audioUser" value="<?= $audio['nama']; ?>">
                                                    <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                        <span class="my-auto">Unduh</span>
                                                        <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between editbtnAud" data-toggle="modal" data-target=".modaleditAud" data-edit="<?= $audio['info']; ?>" data-idaudio="<?= $audio['id']; ?>" href="buttons.html">
                                                    <span class="my-auto">Sunting</span>
                                                    <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between" href="<?= URL; ?>/User/AudhapusTemp/<?= $audio['id']; ?>">
                                                    <span class="my-auto">Hapus</span>
                                                    <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnAud" data-toggle="modal" data-target=".modalDeleteAud" data-audio="<?= $audio['id']; ?>">
                                                    <span class="my-auto">Hapus Permanen</span>
                                                    <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between audiobtn" data-toggle="modal" data-target=".modalaudio" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($audio['created_at'])); ?>" data-audio="<?= $audio['info']; ?>" data-size="<?= $audio['size']; ?>">
                                                    <span class="my-auto">Info</span>
                                                    <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                            <figure class="mb-0 text-center">
                                                <figcaption class="text-center">
                                                    <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                </figcaption>
                                                <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $audio['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                            </figure>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- Content wrapper end -->

    <!-- modal Delete -->
    <div class="modal modalDeleteAud animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-size">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <form action="<?= URL; ?>/User/hapusAudio" method="POST">
                    <div class="modal-body text-center">
                        <input id="audioId" type="hidden" name="audioId" value="">
                        <i class="icon-warning text-danger pt-1 mb-4 d-block" style="font-size: 50px;"></i>
                        <h3 class="mb-2"> Anda Yakin Untuk Menghapus Audio Ini?</h3>
                        <p class="text-danger">Audio yang dihapus tidak dapat dipulihkan!!!</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal info -->
    <div class="modal modalAudio animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Info Audio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="info">
                        <table class="m-0">
                            <tr>
                                <td>Nama Audio</td>
                                <td class="px-3">:</td>
                                <td id="Audionama" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Dibuat</td>
                                <td class="px-3">:</td>
                                <td id="tanggal" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Ukuran Audio</td>
                                <td class="px-3">:</td>
                                <td id="size" class="font-weight-bold"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div class="modal modaleditAud animate__animated animate__faster" data-animate-in='animate__fadeInDown' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="">Edit Audio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= URL; ?>/User/editAudio" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <input class="form-control" id="editIdAud" type="hidden" name="editIdAud" value="">
                            <label for="infoAudio">Edit Nama Audio:</label>
                            <input class="form-control" id="editAudio" type="text" name="editAudio" value="">
                        </div>
                    </div>
                    <div class="modal-footer" style="padding: .5rem;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" name="editBtn" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal modalsukses animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Audio Berhasil Ditambahkan</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesAudDel animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Audio Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesAudedit animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Audio Berhasil Diubah</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalgagalAudedit animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <?php if (isset($_SESSION['adaAud']) && isset($_SESSION['audId'])) : ?>
                    <div class="mb-0 text-center">
                        <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                        <h3 class="mb-2">Gagal</h3>
                        <h5 class="text-danger mb-2">Audio Gagal Diubah</h5>
                        <p>Audio dengan nama <font class="text-danger"><?= $_SESSION['adaAud']; ?></font> sudah ada</p>
                    </div>
                    <form action="<?= URL; ?>/User/editAudio" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group mb-0">
                                <input class="form-control" id="editIdAud" type="hidden" name="editIdAud" value="<?= $_SESSION['audId']; ?>">
                                <label for="infoAudio">Edit Nama Audio:</label>
                                <input class="form-control" id="editAudio" type="text" name="editAudio" value="<?= $_SESSION['adaAud']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer" style="padding: .5rem;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                            <button type="submit" name="editBtn" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php unset($_SESSION['adaAud']); ?>
                    <?php unset($_SESSION['audId']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesHapus animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Audio Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>