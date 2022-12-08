<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Daftar File</li>
            <li class="breadcrumb-item active"><?= $data['folderId']['infoFolder']; ?></li>
        </ol>

        <ul class="app-actions">
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/imageview/<?= $data['folderId']['id']; ?>" method="POST">
                    <input type="hidden" name="idFolder" value="<?= $data['folderId']['id']; ?>" id="fdr">
                    <button type="submit" class="border-0 bg-transparent d-flex align-items-center text-white px-1 mx-2">
                        Gambar
                        <i class="icon-image ml-1"></i>
                    </button>
                </form>
            </li>
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/videoview/<?= $data['folderId']['id']; ?>" method="POST">
                    <input type="hidden" name="idFolder" value="<?= $data['folderId']['id']; ?>" id="fdr">
                    <button type="submit" class="border-0 bg-transparent d-flex align-items-center text-white px-1 mx-2">
                        Video
                        <i class="icon-video ml-1"></i>
                    </button>
                </form>
            </li>
            <li class="d-flex align-items-center">
                <form action="<?= URL; ?>/User/audioview/<?= $data['folderId']['id']; ?>" method="POST">
                    <input type="hidden" name="idFolder" value="<?= $data['folderId']['id']; ?>" id="fdr">
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

        <!-- <div class="row">
            <div class="col-xl-12">
                <form action="<?= URL; ?>/User/test" method="POST" enctype="multipart/form-data" id="dropzoneForm" class="dropzone">

                    <input type="hidden" name="folder" data-awal="<?= $_SESSION['loginData']['nama']; ?>" data-dir="<?= $data['folderId']['namaFolder']; ?>" value="<?= $data['folderId']['namaFolder']; ?>">
                </form>
                <button class="btn btn-primary" type="button" id="uploadfiles" name="uploadBtn">upload</button>
            </div>
        </div> -->
        <!-- Row end -->

        <!-- Row start -->
        <!-- img -->
        <div class="row gutters my-3">
            <div class="col-xl-12 mb-3 px-3">
                <form action="<?= URL; ?>/User/imageview_search/<?= $data['folderId']['id']; ?>" method="POST">
                    <div class="custom-search d-flex justify-content-center ">
                        <div class="input-group col-xl-8 py-1">

                            <input type="text" name="cari" class="form-control">

                            <div class="input-group-append">
                                <button class="btn btn-primary" name="tombolCari" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <div class="nav-tabs-container" style="box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.311) ;">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
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
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade show active" id="jpg" role="tabpanel" aria-labelledby="jpg-tab3">
                            <div class="baguetteBoxOne gallery">
                                <div class="row">
                                    <?php foreach ($data['files'] as $gambar) : ?>
                                        <?php if ($gambar['ekstensi'] == 'jpg') :  ?>
                                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 5px; right: -4px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadImages" method="POST">
                                                            <input type="hidden" name="abc" value="<?= $data['folderId']['namaFolder']; ?>">
                                                            <input type="hidden" name="gambarUser" value="<?= $gambar['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between edit" data-toggle="modal" data-target=".modaledit" data-idfolder="<?= $data['folderId']['id']; ?>" data-folder="<?= $data['folderId']['namaFolder']; ?>" data-edit="<?= $gambar['info']; ?>" data-idgambar="<?= $gambar['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form class="" action="<?= URL; ?>/User/hapusfilesImgTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $gambar['id']; ?>">
                                                            <input type="hidden" name="noFolder" value="<?= $data['folderId']['id']; ?>">
                                                            <button class=" dropdown-item border-0 m-0 d-flex justify-content-between my-auto">
                                                                Hapus
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between hapusImgbtn" data-toggle="modal" data-target=".modalDelete" id="hapusImgbtn" data-fdr="<?= $data['folderId']['namaFolder']; ?>" data-idfdr="<?= $data['folderId']['id']; ?>" data-gambar="<?= $gambar['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between gambarInfo" data-toggle="modal" data-target=".modalInfoGambar" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($gambar['created_at'])); ?>" data-gambar="<?= $gambar['info']; ?>" data-size="<?= $gambar['size']; ?>" data-fdr="<?= $data['folderId']['infoFolder']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" data-caption="<?= $gambar['info']; ?>" class="effects">
                                                    <img src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" class="img-fluid" alt="Wafi Admin">
                                                    <div class="overlay">
                                                        <span class="expand"><i class="icon-image"></i></span>
                                                    </div>
                                                    <p class="text-center" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $gambar['info']; ?></p>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="png" role="tabpanel" aria-labelledby="png-tab3">
                            <div class="baguetteBoxOne gallery">
                                <div class="row">
                                    <?php foreach ($data['files'] as $gambar) : ?>
                                        <?php if ($gambar['ekstensi'] == 'png') :  ?>
                                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 5px; right: -4px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadImages" method="POST">
                                                            <input type="hidden" name="abc" value="<?= $data['folderId']['namaFolder']; ?>">
                                                            <input type="hidden" name="gambarUser" value="<?= $gambar['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between edit" data-toggle="modal" data-target=".modaledit" data-idfolder="<?= $data['folderId']['id']; ?>" data-folder="<?= $data['folderId']['namaFolder']; ?>" data-edit="<?= $gambar['info']; ?>" data-idgambar="<?= $gambar['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form class="" action="<?= URL; ?>/User/hapusfilesImgTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $gambar['id']; ?>">
                                                            <input type="hidden" name="noFolder" value="<?= $data['folderId']['id']; ?>">
                                                            <button class=" dropdown-item border-0 m-0 d-flex justify-content-between my-auto">
                                                                Hapus
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between hapusImgbtn" data-toggle="modal" data-target=".modalDelete" id="hapusImgbtn" data-fdr="<?= $data['folderId']['namaFolder']; ?>" data-idfdr="<?= $data['folderId']['id']; ?>" data-gambar="<?= $gambar['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between gambarInfo" data-toggle="modal" data-target=".modalInfoGambar" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($gambar['created_at'])); ?>" data-gambar="<?= $gambar['info']; ?>" data-size="<?= $gambar['size']; ?>" data-fdr="<?= $data['folderId']['infoFolder']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" data-caption="<?= $gambar['info']; ?>" class="effects">
                                                    <img src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" class="img-fluid" alt="Wafi Admin">
                                                    <div class="overlay">
                                                        <span class="expand"><i class="icon-image"></i></span>
                                                    </div>
                                                    <p class="text-center" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $gambar['info']; ?></p>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="jpeg" role="tabpanel" aria-labelledby="jpeg-tab3">
                            <div class="baguetteBoxOne gallery">
                                <div class="row">
                                    <?php foreach ($data['files'] as $gambar) : ?>
                                        <?php if ($gambar['ekstensi'] == 'jpeg') :  ?>
                                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 5px; right: -4px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadImages" method="POST">
                                                            <input type="hidden" name="abc" value="<?= $data['folderId']['namaFolder']; ?>">
                                                            <input type="hidden" name="gambarUser" value="<?= $gambar['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between edit" data-toggle="modal" data-target=".modaledit" data-idfolder="<?= $data['folderId']['id']; ?>" data-folder="<?= $data['folderId']['namaFolder']; ?>" data-edit="<?= $gambar['info']; ?>" data-idgambar="<?= $gambar['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form class="" action="<?= URL; ?>/User/hapusfilesImgTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $gambar['id']; ?>">
                                                            <input type="hidden" name="noFolder" value="<?= $data['folderId']['id']; ?>">
                                                            <button class=" dropdown-item border-0 m-0 d-flex justify-content-between my-auto">
                                                                Hapus
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between hapusImgbtn" data-toggle="modal" data-target=".modalDelete" id="hapusImgbtn" data-fdr="<?= $data['folderId']['namaFolder']; ?>" data-idfdr="<?= $data['folderId']['id']; ?>" data-gambar="<?= $gambar['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between gambarInfo" data-toggle="modal" data-target=".modalInfoGambar" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($gambar['created_at'])); ?>" data-gambar="<?= $gambar['info']; ?>" data-size="<?= $gambar['size']; ?>" data-fdr="<?= $data['folderId']['infoFolder']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" data-caption="<?= $gambar['info']; ?>" class="effects">
                                                    <img src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" class="img-fluid" alt="Wafi Admin">
                                                    <div class="overlay">
                                                        <span class="expand"><i class="icon-image"></i></span>
                                                    </div>
                                                    <p class="text-center" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $gambar['info']; ?></p>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="gif" role="tabpanel" aria-labelledby="gif-tab3">
                            <div class="baguetteBoxOne gallery">
                                <div class="row">
                                    <?php foreach ($data['files'] as $gambar) : ?>
                                        <?php if ($gambar['ekstensi'] == 'gif') :  ?>
                                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 5px; right: -4px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadImages" method="POST">
                                                            <input type="hidden" name="abc" value="<?= $data['folderId']['namaFolder']; ?>">
                                                            <input type="hidden" name="gambarUser" value="<?= $gambar['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between edit" data-toggle="modal" data-target=".modaledit" data-idfolder="<?= $data['folderId']['id']; ?>" data-folder="<?= $data['folderId']['namaFolder']; ?>" data-edit="<?= $gambar['info']; ?>" data-idgambar="<?= $gambar['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form class="" action="<?= URL; ?>/User/hapusfilesImgTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $gambar['id']; ?>">
                                                            <input type="hidden" name="noFolder" value="<?= $data['folderId']['id']; ?>">
                                                            <button class=" dropdown-item border-0 m-0 d-flex justify-content-between my-auto">
                                                                Hapus
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between hapusImgbtn" data-toggle="modal" data-target=".modalDelete" id="hapusImgbtn" data-fdr="<?= $data['folderId']['namaFolder']; ?>" data-idfdr="<?= $data['folderId']['id']; ?>" data-gambar="<?= $gambar['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between gambarInfo" data-toggle="modal" data-target=".modalInfoGambar" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($gambar['created_at'])); ?>" data-gambar="<?= $gambar['info']; ?>" data-size="<?= $gambar['size']; ?>" data-fdr="<?= $data['folderId']['infoFolder']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" data-caption="<?= $gambar['info']; ?>" class="effects">
                                                    <img src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" class="img-fluid" alt="Wafi Admin">
                                                    <div class="overlay">
                                                        <span class="expand"><i class="icon-image"></i></span>
                                                    </div>
                                                    <p class="text-center" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $gambar['info']; ?></p>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tiff" role="tabpanel" aria-labelledby="tiff-tab3">
                            <div class="baguetteBoxOne gallery">
                                <div class="row">
                                    <?php foreach ($data['files'] as $gambar) : ?>
                                        <?php if ($gambar['ekstensi'] == 'tiff') :  ?>
                                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 5px; right: -4px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                    <li>
                                                        <form action="<?= URL; ?>/User/downloadImages" method="POST">
                                                            <input type="hidden" name="abc" value="<?= $data['folderId']['namaFolder']; ?>">
                                                            <input type="hidden" name="gambarUser" value="<?= $gambar['nama']; ?>">
                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                                                <span class="my-auto">Download</span>
                                                                <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between edit" data-toggle="modal" data-target=".modaledit" data-idfolder="<?= $data['folderId']['id']; ?>" data-folder="<?= $data['folderId']['namaFolder']; ?>" data-edit="<?= $gambar['info']; ?>" data-idgambar="<?= $gambar['id']; ?>" href="buttons.html">
                                                            <span class="my-auto">Sunting</span>
                                                            <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form class="" action="<?= URL; ?>/User/hapusfilesImgTemp/" method="POST">
                                                            <input type="hidden" name="trashpost" value="<?= $gambar['id']; ?>">
                                                            <input type="hidden" name="noFolder" value="<?= $data['folderId']['id']; ?>">
                                                            <button class=" dropdown-item border-0 m-0 d-flex justify-content-between my-auto">
                                                                Hapus
                                                                <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between hapusImgbtn" data-toggle="modal" data-target=".modalDelete" id="hapusImgbtn" data-fdr="<?= $data['folderId']['namaFolder']; ?>" data-idfdr="<?= $data['folderId']['id']; ?>" data-gambar="<?= $gambar['id']; ?>">
                                                            <span class="my-auto">Hapus Permanen</span>
                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between gambarInfo" data-toggle="modal" data-target=".modalInfoGambar" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($gambar['created_at'])); ?>" data-gambar="<?= $gambar['info']; ?>" data-size="<?= $gambar['size']; ?>" data-fdr="<?= $data['folderId']['infoFolder']; ?>">
                                                            <span class="my-auto">Info</span>
                                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" data-caption="<?= $gambar['info']; ?>" class="effects">
                                                    <img src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama'] ?>/<?= $data['folderId']['namaFolder']; ?>/<?= $gambar['nama'] ?>" class="img-fluid" alt="Wafi Admin">
                                                    <div class="overlay">
                                                        <span class="expand"><i class="icon-image"></i></span>
                                                    </div>
                                                    <p class="text-center" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $gambar['info']; ?></p>
                                                </a>
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
    <div class="modal modalDelete animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <form action="<?= URL; ?>/User/hapusFGambar" method="POST">
                    <div class="modal-body text-center">
                        <input id="gambarId" type="hidden" name="gambarId" value="">
                        <input type="hidden" name="folderId" id="folderId" value="">
                        <input type="hidden" name="namafdr" id="namafdr" value="">
                        <i class="icon-warning text-danger pt-1 mb-4 d-block" style="font-size: 50px;"></i>
                        <h3 class="mb-2"> Anda Yakin Untuk Menghapus Gambar Ini?</h3>
                        <p class="text-danger">Gambar yang dihapus tidak dapat dipulihkan!!!</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div class="modal modaledit animate__animated animate__faster" data-animate-in='animate__fadeInDown' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="">Edit Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= URL; ?>/User/editFgambar" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <input class="form-control" id="editIdImg" type="hidden" name="editIdImg" value="">
                            <input type="hidden" id="fdrId" name="fdrId" value="">
                            <input type="hidden" id="namaFolder" name="namaFolder" value="">
                            <label for="infoGambar">Edit Nama Gambar:</label>
                            <input class="form-control" id="infoGambar" type="text" name="editImage" value="">
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

    <!-- modal info -->
    <div class="modal modalInfoGambar animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Info Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="info">
                        <table class="m-0">
                            <tr>
                                <td>Nama Gambar</td>
                                <td class="px-3">:</td>
                                <td id="imgFolder" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Dibuat</td>
                                <td class="px-3">:</td>
                                <td id="tanggalImg" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Ukuran Gambar</td>
                                <td class="px-3">:</td>
                                <td id="sizeImg" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Direktori</td>
                                <td class="px-3">:</td>
                                <td id="dirImg" class="font-weight-bold"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesImgDel animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Gambar Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesImgedit animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Gambar Berhasil Diubah</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalgagalImgedit animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <?php if (isset($_SESSION['adaimg']) && isset($_SESSION['imgId']) && isset($_SESSION['fdrid']) && isset($_SESSION['namafdr'])) : ?>
                    <div class="mb-0 text-center">
                        <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                        <h3 class="mb-2">Gagal</h3>
                        <h5 class="text-danger mb-2">Gambar Gagal Diubah</h5>
                        <p>Gambar dengan nama <font class="text-danger"><?= $_SESSION['adaimg']; ?></font> sudah ada</p>
                    </div>
                    <form action="<?= URL; ?>/User/editFgambar" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group mb-0">
                                <input class="form-control" id="editIdImg" type="hidden" name="editIdImg" value="<?= $_SESSION['imgId']; ?>">
                                <input type="hidden" id="fdrId" name="fdrId" value="<?= $_SESSION['fdrid']; ?>">
                                <input type="hidden" id="namaFolder" name="namaFolder" value="<?= $_SESSION['namafdr']; ?>">
                                <label for="infoGambar">Edit Nama Gambar:</label>
                                <input class="form-control" id="infoGambar" type="text" name="editImage" value="<?= $_SESSION['adaimg']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer" style="padding: .5rem;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                            <button type="submit" name="editBtn" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php unset($_SESSION['adaimg']); ?>
                    <?php unset($_SESSION['imgId']); ?>
                    <?php unset($_SESSION['fdrid']); ?>
                    <?php unset($_SESSION['namafdr']); ?>
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
                    <h5 class="text-success mb-2">Gambar Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>