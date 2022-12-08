<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Manajemen File</li>
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
            <div class="col-xl-12 mb-3 px-3">
                <form action="<?= URL; ?>/User/pageVideo_search/" method="POST">
                    <div class="custom-search d-flex justify-content-center ">
                        <div class="input-group col-xl-8 py-1">

                            <input type="text" name="carivideo" class="form-control">

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
                                Upload Video <font class="text-info"><u>(klik disini)</u></font>
                            </a>
                        </div>
                        <div id="toggleIconsCollapseOne" class="collapse" aria-labelledby="toggleIconsOne" data-parent="#toggleIcons">
                            <div class="accordion-body">
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 text-center mx-auto my-auto">
                                    <!-- <form id="uploadForm" class="d-block" action="<?= URL; ?>/User/addVid" method="POST" enctype="multipart/form-data">
                                        <label for="upload">
                                            <div class="wrapper">
                                                <i class="icon-upload-to-cloud" aria-hidden="true"></i>
                                                <input type="file" id="upload" name="uploadVideo" data-height="100" required accept=".mp4,.MOV,.MTS,.avi,.mkv">
                                                <input type="hidden" name="bitrate" value="5000k">
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
                                    <form action="<?= URL; ?>/User/addVid" class="dropzone gbr" id="videoDrop">
                                    </form>
                                    <button type="submit" class="btn my-3 col-xl-3 tombol rounded-pill" name="tombol" id="tombolVid">
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
                            <a class="nav-link tab-link active" id="mp4-tab3" data-toggle="tab" href="#Mp4" role="tab" aria-controls="Mp4" aria-selected="true"><i class="icon-video"></i>mp4</a>
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
                    <div class="content">
                        <div class="video-container">
                            <div class="main-video">
                                <div class="video">
                                    <video src="" disablePictureInPicture controls controlslist="nodownload" autoplay height="450"></video>
                                    <h3 class="title py-1">Video Title</h3>
                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent3">
                                <div class="video-list position-relative tab-pane fade show active" id="Mp4" role="tabpanel" aria-labelledby="mp4-tab3">
                                    <?php foreach ($data['videoShow'] as $video) : ?>
                                        <?php if ($video['ekstensi'] == 'mp4') : ?>
                                            <div class="col-xl-12 col-lg-12 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dots" style="z-index: 1; top: 19px; right: 22px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadVideo/" method="POST">
                                                            <input type="hidden" name="videoUser" value="<?= $video['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between Videditbtn" data-toggle="modal" data-target=".modaleditVid" data-edit="<?= $video['info']; ?>" data-idvideo="<?= $video['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/VidhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $video['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnVid" data-toggle="modal" data-target=".modalDeleteVid" data-video="<?= $video['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between videobtn" data-toggle="modal" data-target=".modalVideo" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($video['created_at'])); ?>" data-video="<?= $video['info']; ?>" data-size="<?= $video['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="vid">
                                                <video src="<?= BASEURL; ?>/media/<?= $data['folder']['nama'] ?>/<?= $video['nama']; ?>" muted height="450"></video>
                                                <div class="judul" style="width: 100px;">
                                                    <h6 class="title pt-1 pb-0" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $video['info'] ?></h6>
                                                    <p class="mb-0 font-italic" style="font-size: 10px;"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class=" video-list position-relative tab-pane fade" id="mov" role="tabpanel" aria-labelledby="mov-tab3">
                                    <?php foreach ($data['videoShow'] as $video) : ?>
                                        <?php if ($video['ekstensi'] == 'MOV') : ?>
                                            <div class="col-xl-12 col-lg-12 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dots" style="z-index: 1; top: 19px; right: 22px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadVideo/" method="POST">
                                                            <input type="hidden" name="videoUser" value="<?= $video['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between Videditbtn" data-toggle="modal" data-target=".modaleditVid" data-edit="<?= $video['info']; ?>" data-idvideo="<?= $video['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/VidhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $video['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnVid" data-toggle="modal" data-target=".modalDeleteVid" data-video="<?= $video['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between videobtn" data-toggle="modal" data-target=".modalVideo" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($video['created_at'])); ?>" data-video="<?= $video['info']; ?>" data-size="<?= $video['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="vid">
                                                <video src="<?= BASEURL; ?>/media/<?= $data['folder']['nama'] ?>/<?= $video['nama']; ?>" muted height="450"></video>
                                                <div class="judul" style="width: 100px;">
                                                    <h6 class="title pt-1 pb-0" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $video['info'] ?></h6>
                                                    <p class="mb-0 font-italic" style="font-size: 10px;"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class=" video-list position-relative tab-pane fade" id="mkv" role="tabpanel" aria-labelledby="mkv-tab3">
                                    <?php foreach ($data['videoShow'] as $video) : ?>
                                        <?php if ($video['ekstensi'] == 'mkv') : ?>
                                            <div class="col-xl-12 col-lg-12 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dots" style="z-index: 1; top: 19px; right: 22px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadVideo/" method="POST">
                                                            <input type="hidden" name="videoUser" value="<?= $video['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between Videditbtn" data-toggle="modal" data-target=".modaleditVid" data-edit="<?= $video['info']; ?>" data-idvideo="<?= $video['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/VidhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $video['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnVid" data-toggle="modal" data-target=".modalDeleteVid" data-video="<?= $video['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between videobtn" data-toggle="modal" data-target=".modalVideo" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($video['created_at'])); ?>" data-video="<?= $video['info']; ?>" data-size="<?= $video['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="vid">
                                                <video src="<?= BASEURL; ?>/media/<?= $data['folder']['nama'] ?>/<?= $video['nama']; ?>" muted height="450"></video>
                                                <div class="judul" style="width: 100px;">
                                                    <h6 class="title pt-1 pb-0" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $video['info'] ?></h6>
                                                    <p class="mb-0 font-italic" style="font-size: 10px;"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class=" video-list position-relative tab-pane fade" id="mts" role="tabpanel" aria-labelledby="mts-tab3">
                                    <?php foreach ($data['videoShow'] as $video) : ?>
                                        <?php if ($video['ekstensi'] == 'MTS') : ?>
                                            <div class="col-xl-12 col-lg-12 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dots" style="z-index: 1; top: 19px; right: 22px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadVideo/" method="POST">
                                                            <input type="hidden" name="videoUser" value="<?= $video['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between Videditbtn" data-toggle="modal" data-target=".modaleditVid" data-edit="<?= $video['info']; ?>" data-idvideo="<?= $video['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/VidhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $video['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnVid" data-toggle="modal" data-target=".modalDeleteVid" data-video="<?= $video['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between videobtn" data-toggle="modal" data-target=".modalVideo" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($video['created_at'])); ?>" data-video="<?= $video['info']; ?>" data-size="<?= $video['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="vid">
                                                <video src="<?= BASEURL; ?>/media/<?= $data['folder']['nama'] ?>/<?= $video['nama']; ?>" muted height="450"></video>
                                                <div class="judul" style="width: 100px;">
                                                    <h6 class="title pt-1 pb-0" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $video['info'] ?></h6>
                                                    <p class="mb-0 font-italic" style="font-size: 10px;"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class=" video-list position-relative tab-pane fade" id="avi" role="tabpanel" aria-labelledby="avi-tab3">
                                    <?php foreach ($data['videoShow'] as $video) : ?>
                                        <?php if ($video['ekstensi'] == 'avi') : ?>
                                            <div class="col-xl-12 col-lg-12 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dots" style="z-index: 1; top: 19px; right: 22px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadVideo/" method="POST">
                                                            <input type="hidden" name="videoUser" value="<?= $video['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between Videditbtn" data-toggle="modal" data-target=".modaleditVid" data-edit="<?= $video['info']; ?>" data-idvideo="<?= $video['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="<?= URL; ?>/User/VidhapusTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $video['id']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Hapus</span>
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnVid" data-toggle="modal" data-target=".modalDeleteVid" data-video="<?= $video['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between videobtn" data-toggle="modal" data-target=".modalVideo" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($video['created_at'])); ?>" data-video="<?= $video['info']; ?>" data-size="<?= $video['size']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="vid">
                                                <video src="<?= BASEURL; ?>/media/<?= $data['folder']['nama'] ?>/<?= $video['nama']; ?>" muted height="450"></video>
                                                <div class="judul" style="width: 100px;">
                                                    <h6 class="title pt-1 pb-0" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $video['info'] ?></h6>
                                                    <p class="mb-0 font-italic" style="font-size: 10px;"><?= date('d M Y H:i', strtotime($video['created_at'])); ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- Content wrapper end -->

    <!-- modal Delete -->
    <div class="modal modalDeleteVid animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-size">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <form action="<?= URL; ?>/User/hapusVideo" method="POST">
                    <div class="modal-body text-center">
                        <input id="videoId" type="hidden" name="videoId" value="">
                        <i class="icon-warning text-danger pt-1 mb-4 d-block" style="font-size: 50px;"></i>
                        <h3 class="mb-2"> Anda Yakin Untuk Menghapus Video Ini?</h3>
                        <p class="text-danger">Video yang dihapus tidak dapat dipulihkan!!!</p>
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
    <div class="modal modalVideo animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size-video modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Info Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="info">
                        <table class="m-0">
                            <tr>
                                <td>Nama Video</td>
                                <td class="px-3">:</td>
                                <td id="Videonama" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Dibuat</td>
                                <td class="px-3">:</td>
                                <td id="tanggal" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Ukuran Video</td>
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
    <div class="modal modaleditVid animate__animated animate__faster" data-animate-in='animate__fadeInDown' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="">Edit Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= URL; ?>/User/editVideo" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <input class="form-control" id="editIdVid" type="hidden" name="editIdVid" value="">
                            <label for="infoGambar">Edit Nama Video:</label>
                            <input class="form-control" id="infoVideo" type="text" name="editVideo" value="">
                        </div>
                    </div>
                    <div class="modal-footer" style="padding: .5rem;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" name="editBtnVid" class="btn btn-primary">Simpan</button>
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
                    <h5 class="text-success mb-2">Video Berhasil Ditambahkan</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesVidDel animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Video Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesVidedit animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Video Berhasil Diubah</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalgagalVidedit animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <?php if (isset($_SESSION['adaVid']) && isset($_SESSION['vidId'])) : ?>
                    <div class="mb-0 text-center">
                        <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                        <h3 class="mb-2">Gagal</h3>
                        <h5 class="text-danger mb-2">Video Gagal Diubah</h5>
                        <p>Video dengan nama <font class="text-danger"><?= $_SESSION['adaVid']; ?></font> sudah ada</p>
                    </div>
                    <form action="<?= URL; ?>/User/editVideo" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group mb-0">
                                <input class="form-control" id="editIdVid" type="hidden" name="editIdVid" value="<?= $_SESSION['vidId']; ?>">
                                <label for="infoGambar">Edit Nama Video:</label>
                                <input class="form-control" id="infoVideo" type="text" name="editVideo" value="<?= $_SESSION['adaVid']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer" style="padding: .5rem;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                            <button type="submit" name="editBtnVid" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php unset($_SESSION['adaVid']); ?>
                    <?php unset($_SESSION['vidId']); ?>
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
                    <h5 class="text-success mb-2">Video Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>