<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboards</li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <ul class="app-actions">
            <li class="d-flex align-items-center">
                <!-- Small modal -->
                <button type="button" class="btn shadow-sm border-0 d-flex align-items-center" data-toggle="modal" data-target=".modalFolder" data-original-title="NewFolder">
                    <i class="icon-create_new_folder text-white mr-1" style="font-size: 18px;"></i>
                    <span class="d-block my-auto text-white" style="font-size: 13px;">
                        Buat Folder
                    </span>
                </button>

            </li>
        </ul>
        <div class="modal modalFolder animate__animated animate__faster" data-animate-in='animate__fadeInDown' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="vCenterModal">
            <div class="modal-dialog modal-size modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mySmallModalLabel">Buat Folder</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= URL; ?>/User/CreateF" method="POST">
                            <div class="form-group m-0">
                                <label for="foldername">Nama Folder</label>
                                <input type="text" class="form-control" value="folder baru" id="inputName" placeholder="Masukkan Nama Folder" name="folderName" required autofocus>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!-- Row start -->
        <div class="row">
            <div class="col-xl-12 mb-5 px-3">
                <form action="<?= URL; ?>/User/folder_search/" method="POST">
                    <div class="custom-search d-flex justify-content-center ">
                        <div class="input-group col-xl-8 py-1">

                            <input type="text" placeholder="cari folder anda disini" name="cari" class="form-control" value="<?php if (isset($_SESSION['cari'])) {
                                                                                                                                    echo $_SESSION['cari'];
                                                                                                                                } else {
                                                                                                                                    unset($_SESSION['cari']);
                                                                                                                                }  ?>">

                            <div class="input-group-append">
                                <button class="btn btn-primary" name="tombolCari" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12 d-flex flex-wrap px-2">
                <?php foreach ($data['folder'] as $folder) : ?>
                    <div class="mx-2 position-relative" style="max-width: 13.666667%;">
                        <a href="#" class="position-absolute sub-nav-link dot" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="top:10px;right: 0;">
                            <i class="icon-dots-three-vertical" style="font-size: 15px;"></i>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                <li style="display:none;">
                                    <a class="dropdown-item" href="buttons.html">
                                        <span class="my-auto">Buka</span>
                                        <i class="icon-log-in text-primary" style="font-size: 18px;"></i>
                                    </a>
                                </li>
                                <li class="buka">
                                    <form action="<?= URL; ?>/User/imageview/<?= $folder['id']; ?>" class="mb-0" method="POST">
                                        <input type="hidden" name="idFolder" value="<?= $folder['id']; ?>">
                                        <button type="submit" class="dropdown-item border-0 m-0 d-flex justify-content-between open">
                                            <span class="my-auto ">Buka</span>
                                            <i class="icon-log-in text-primary" style="font-size: 18px; color: #02a7ef;"></i>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item border-0 m-0 d-flex justify-content-between unggah" data-toggle="modal" data-target=".modalUnggah" data-fol="<?= $folder['namaFolder']; ?>" data-idfolder="<?= $folder['id']; ?>" data-dir="<?= $folder['infoFolder']; ?>">
                                        <span class="my-auto">Unggah File</span>
                                        <i class="icon-plus" style="font-size: 18px; color: #02a7ef;"></i>
                                    </a>
                                </li>
                                <li>
                                    <form action="<?= URL; ?>/User/downloadZip/" class="mb-0" method="POST">
                                        <input type="hidden" name="zipDownload" value="<?= $folder['namaFolder']; ?>">
                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                            <span class="my-auto">Unduh</span>
                                            <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between btnfolderEdit" data-toggle="modal" data-target=".modalfolderEdit" data-id="<?= $folder['id'] ?>" data-folder="<?= $folder['infoFolder']; ?>" href="#">
                                        <span class="my-auto">Sunting</span>
                                        <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                    </a>
                                </li>
                                <li>

                                    <form class="" action="<?= URL; ?>/User/hapusfoldertemp/" method="POST">
                                        <input type="hidden" name="trashpost" value="<?= $folder['id']; ?>">
                                        <button class=" dropdown-item border-0 m-0 d-flex justify-content-between my-auto">
                                            Hapus
                                            <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between btnFolderDel" href="#" data-toggle="modal" data-target=".modalDeleteFolder" id="hapus" data-id="<?= $folder['id'] ?>">
                                        <span class="my-auto">Hapus Selamanya</span>
                                        <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between" data-toggle="modal" data-target=".modalInfo" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i:s', strtotime($folder['tanggal'])); ?>" data-folder="<?= $folder['infoFolder']; ?>" data-total="<?= Helper::totalfile($folder['namaFolder']); ?>" data-size="<?= Helper::getFolderSize($folder['namaFolder']); ?>">
                                        <span class="my-auto">Info</span>
                                        <i class="icon-info text-info" style="font-size: 18px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </a>
                        <div class="mb-5">
                            <form action="<?= URL; ?>/User/imageview/<?= $folder['id']; ?>" method="POST">
                                <input type="hidden" name="idFolder" value="<?= $folder['id']; ?>" id="fdr">
                                <div class="px-3">
                                    <button type="submit" class="dropdown-item judul text-center my-1">
                                        <div class="icon text-center">
                                            <i class="icon-folder" style="font-size: 42px; color: #e8b218;"></i>
                                        </div>
                                        <p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                            <?= $folder['infoFolder']; ?></p>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->
    <div class="row gutters mb-0">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center secondary">
                            <?php if (!isset($_SESSION['cari'])) : ?>
                                <?php if ($data['halamanaktif'] > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= URL; ?>/User/folder_create/?page=<?= $data['halamanaktif'] - 1; ?>">
                                            <i class="icon-chevron-left"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = $data['start']; $i <= $data['end']; $i++) : ?>
                                    <?php if ($data['halamanaktif'] == $i) : ?>
                                        <li class="page-item active"><a class="page-link" href="<?= URL; ?>/User/folder_create/?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php else : ?>
                                        <li class="page-item"><a class="page-link" href="<?= URL; ?>/User/folder_create/?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <?php if ($data['halamanaktif'] < $data['jumlahpagination']) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= URL; ?>/User/folder_create/?page=<?= $data['halamanaktif'] + 1; ?>">
                                            <i class="icon-chevron-right"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if ($data['halamanaktif'] > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= URL; ?>/User/folder_search/?page=<?= $data['halamanaktif'] - 1; ?>">
                                            <i class="icon-chevron-left"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = $data['start']; $i <= $data['end']; $i++) : ?>
                                    <?php if ($data['halamanaktif'] == $i) : ?>
                                        <li class="page-item active"><a class="page-link" href="<?= URL; ?>/User/folder_search/?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php else : ?>
                                        <li class="page-item"><a class="page-link" href="<?= URL; ?>/User/folder_search/?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <?php if ($data['halamanaktif'] < $data['jumlahpagination']) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= URL; ?>/User/folder_search/?page=<?= $data['halamanaktif'] + 1; ?>">
                                            <i class="icon-chevron-right"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- modal info -->
    <div class="modal modalInfo animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" id="vCenterModal">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Info Folder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="info">
                        <table class="m-0">
                            <tr>
                                <td>Folder</td>
                                <td class="px-3">:</td>
                                <td id="Foldernama" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Dibuat</td>
                                <td class="px-3">:</td>
                                <td id="tanggal" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Total File</td>
                                <td class="px-3">:</td>
                                <td id="total" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td class="px-3">:</td>
                                <td id="size" class="font-weight-bold"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal folder Delete -->
    <div class="modal modalDeleteFolder animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" id="vCenterModal">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                    <!-- <h5 class="modal-title" id="">Hapus Folder</h5> -->
                    <!-- <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <form action="<?= URL; ?>/User/hapusFolder" method="POST">
                    <div class="modal-body pb-1 text-center">
                        <input id="folderId" type="hidden" name="folderId" value="">
                        <i class="icon-warning text-danger pt-1 mb-4 d-block" style="font-size: 50px;"></i>
                        <h3 class="mb-2"> Anda Yakin Untuk Menghapus Folder Ini?</h3>
                        <p class="text-danger">Folder yang dihapus tidak dapat dipulihkan!!!</p>
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
    <div class="modal modalfolderEdit animate__animated animate__faster" data-animate-in='animate__fadeInDown' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="">Edit Folder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= URL; ?>/User/editFolder" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <input class="form-control" id="editId" type="hidden" name="editId" value="">
                            <label for="editFolder">Edit Folder:</label>
                            <input class="form-control" id="editFolder" type="text" name="editFolder" value="">
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

    <div class="modal modalUnggah fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-unggah modal-dialog-centered modal-xl ">
            <div class="modal-content border-0">
                <div class="modal-header bg-info">
                    <h5 class="modal-title my-auto" id="">Unggah File <small><i class="icon-chevron-right"></i></small> <small id="namaFdr" class="mb-1"></small></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= URL; ?>/User/multipleFiles" method="POST" enctype="multipart/form-data" class="dropzone dz-clickable" id="myGreatDropzone" style="border: 3px dashed gray;">
                        <input type="hidden" id="iniFolder" name="folderku">
                        <input type="hidden" id="iniIdFolder" name="idFolderku">
                    </form>
                </div>
                <div class="modal-footer" style="padding: .5rem;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="batalupload">Batalkan</button>
                    <button type="button" name="editBtn" class="btn btn-primary" id="uploadfiles">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsukses animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-alert modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="">Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5><i class="icon-check_circle mr-1 text-success" style="font-size: 21px;"></i>Data Berhasil Ditambahkan</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesHapusfolder animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Folder Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesEditfolder animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Folder Berhasil Diubah</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalgagalEditfolder animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <?php if (isset($_SESSION['folderada'])) : ?>
                    <div class="mb-0 text-center">
                        <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                        <h3 class="mb-2">Gagal</h3>
                        <h5 class="text-danger mb-2">Folder Gagal Diubah</h5>
                        <p>Folder dengan nama <font class="text-danger"><?= $_SESSION['folderada']; ?></font> sudah ada</p>
                    </div>
                    <form action="<?= URL; ?>/User/editFolder" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group mb-0">
                                <label for="editId">Edit Folder:</label>
                                <input class="form-control" id="editId" type="hidden" name="editId" value="<?= $_SESSION['folderadaId']; ?>">
                                <input class="form-control" id="editFolder" type="text" name="editFolder" value="<?= $_SESSION['folderada']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer" style="padding: .5rem;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                            <button type="submit" name="editBtn" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php unset($_SESSION['folderada']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesAddfolder animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Folder Berhasil Dibuat</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalgagalAddfolder animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <?php if (isset($_SESSION['adaFolder'])) : ?>
                    <div class="mb-0 text-center">
                        <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                        <h3 class="mb-2">Gagal</h3>
                        <h5 class="text-danger mb-2">Folder Gagal Dibuat</h5>
                        <p>Folder dengan nama <font class="text-danger"><?= $_SESSION['adaFolder']; ?></font> sudah ada</p>
                    </div>
                    <div class="modal-body">
                        <form action="<?= URL; ?>/User/CreateF" method="POST">
                            <div class="form-group m-0">
                                <label for="foldername">Nama Folder:</label>
                                <input type="text" class="form-control" value="<?= $_SESSION['adaFolder']; ?>" id="inputName" placeholder="Masukkan Nama Folder" name="folderName" required autofocus>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <?php unset($_SESSION['adaFolder']); ?>
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
                    <h5 class="text-success mb-2">Folder Berhasil Di Hapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>