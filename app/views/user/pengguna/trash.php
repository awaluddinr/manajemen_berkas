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
                    <i class="icon-delete_sweep text-white mr-1" style="font-size: 18px;"></i>
                    <span class="d-block my-auto text-white" style="font-size: 13px;">
                        Bersihkan
                    </span>
                </button>

            </li>
        </ul>
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                <?php if ($_SESSION['peran'] == 'footager') : ?>
                    <div class="nav-tabs-container" style="box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.311) ;">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link tab-link active" id="jpg-tab3" data-toggle="tab" href="#jpg" role="tab" aria-controls="jpg" aria-selected="true"><i class="icon-image"></i>Folder</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tab-link" id="png-tab3" data-toggle="tab" href="#png" role="tab" aria-controls="png" aria-selected="false"><i class="icon-image"></i>File</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent3" style="padding: .1rem;">
                            <div class="tab-pane fade show active" id="jpg" role="tabpanel" aria-labelledby="jpg-tab3">
                                <div class="table-container border-0">
                                    <div class="table-responsive">
                                        <table id="jpgTable" class="table custom-table border-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Nama Folder</th>
                                                    <th class="text-center">Tipe</th>
                                                    <th class="text-center">Ukuran</th>
                                                    <th class="text-center">Tanggal Dihapus</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data['trashFolder'] as $folder) : ?>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="">
                                                            <form action="" method="POST">
                                                                <button type="submit" class="btn foldertrash">
                                                                    <i class="icon-folder mr-1 text-warning"></i>
                                                                    <?= $folder['infoFolder']; ?>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">folder</td>
                                                        <td class="text-center"><?= Helper::getFolderSize($folder['namaFolder']); ?></td>
                                                        <td class="text-center"><?= date('d M Y H:i', strtotime($folder['delete_at'])); ?> </td>
                                                        <td class="text-center">
                                                            <a href="#" class="sub-nav-link dot" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="icon-dots-three-horizontal" style="font-size: 15px;"></i>
                                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                                    <li>
                                                                        <a class="dropdown-item d-flex justify-content-between" href="<?= URL; ?>/User/pulihfolder/<?= $folder['id']; ?>">
                                                                            <span class="my-auto">Pulihkan</span>
                                                                            <i class="icon-rotate_left text-primary" style="font-size: 18px;"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex justify-content-between trashFolderDel" href="#" data-toggle="modal" data-target=".modalDeleteFolder" data-id="<?= $folder['id'] ?>">
                                                                            <span class="my-auto">Hapus Selamanya</span>
                                                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="png" role="tabpanel" aria-labelledby="png-tab3">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="table-container border-0">
                                        <div class="table-responsive">
                                            <table id="pngTable" class="table custom-table border-0">
                                                <thead class="bg-white">
                                                    <tr>

                                                        <th class="text-center">Nama File</th>
                                                        <th class="text-center">Ekstensi</th>
                                                        <th class="text-center">Ukuran</th>
                                                        <th class="text-center">Tanggal Dihapus</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($data['trashShow'] as $files) : ?>
                                                        <tr>
                                                            <?php if (is_null($files['folderId'])) : ?>
                                                                <?php if ($files['ekstensi'] == 'jpg' || $files['ekstensi'] == 'png' || $files['ekstensi'] == 'jpeg' || $files['ekstensi'] == 'gif' || $files['ekstensi'] == 'tiff') : ?>
                                                                    <td class="baguetteBoxOne gallery">
                                                                        <div class="mb-0 d-flex justify-content-center">
                                                                            <i class="icon-image mr-1 my-auto" style="color:#366699;"></i>
                                                                            <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['nama'] ?>" data-caption="<?= $files['info']; ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php elseif ($files['ekstensi'] == 'mp4' || $files['ekstensi'] == 'MOV' || $files['ekstensi'] == 'mkv' || $files['ekstensi'] == 'MTS' || $files['ekstensi'] == 'avi') : ?>
                                                                    <td class="text-center">
                                                                        <div class="mb-0 text-center mx-auto">
                                                                            <i class="icon-video mr-2 my-auto" style="color:#338f50 ;"></i>
                                                                            <a class="border-0 mb-0 trashVidbtn playtrash" href="" data-toggle="modal" data-target=".modalplaytrash" data-caption="<?= $files['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['nama'] ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php elseif ($files['ekstensi'] == 'mp3' || $files['ekstensi'] == 'wav' || $files['ekstensi'] == 'wma' || $files['ekstensi'] == 'aac' || $files['ekstensi'] == 'flac' || $files['ekstensi'] == 'pcm' || $files['ekstensi'] == 'aiff' || $files['ekstensi'] == 'ogg') : ?>
                                                                    <td class="text-center">
                                                                        <div class="mb-0 text-center mx-auto">
                                                                            <i class="icon-music mr-2 my-auto text-center" style="color:#ba1d1d ;"></i>
                                                                            <a class="border-0 mb-0 trashAudbtn text-left playAudtrash" href="" data-toggle="modal" data-target=".modalplayAudtrash" data-caption="<?= $files['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['nama'] ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php endif; ?>
                                                            <?php else : ?>
                                                                <?php if ($files['ekstensi'] == 'jpg' || $files['ekstensi'] == 'png' || $files['ekstensi'] == 'jpeg' || $files['ekstensi'] == 'gif' || $files['ekstensi'] == 'tiff') : ?>
                                                                    <td class="baguetteBoxOne gallery">
                                                                        <div class="mb-0 d-flex justify-content-center">
                                                                            <i class="icon-image text-primary mr-1 my-auto"></i>
                                                                            <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['dir'] ?>/<?= $files['nama'] ?>" data-caption="<?= $files['info']; ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php elseif ($files['ekstensi'] == 'mp4' || $files['ekstensi'] == 'MOV' || $files['ekstensi'] == 'mkv' || $files['ekstensi'] == 'MTS' || $files['ekstensi'] == 'avi') : ?>
                                                                    <td>
                                                                        <div class="mb-0 text-center mx-auto">
                                                                            <i class="icon-video mr-2 my-auto" style="color:#338f50 ;"></i>
                                                                            <a class="border-0 mb-0 trashVidbtn playtrash" href="" data-toggle="modal" data-target=".modalplaytrash" data-caption="<?= $files['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['dir'] ?>/<?= $files['nama'] ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php elseif ($files['ekstensi'] == 'mp3' || $files['ekstensi'] == 'wav' || $files['ekstensi'] == 'wma' || $files['ekstensi'] == 'aac' || $files['ekstensi'] == 'flac' || $files['ekstensi'] == 'pcm' || $files['ekstensi'] == 'aiff' || $files['ekstensi'] == 'ogg') : ?>
                                                                    <td>
                                                                        <div class="mb-0 text-center mx-auto">
                                                                            <i class="icon-music mr-2 my-auto" style="color:#ba1d1d ;"></i>
                                                                            <a class="border-0 mb-0 trashAudbtn playAudtrash" href="" data-toggle="modal" data-target=".modalplayAudtrash" data-caption="<?= $files['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['dir'] ?>/<?= $files['nama'] ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <td class="text-center"><?= $files['ekstensi']; ?></td>
                                                            <td class="text-center"><?= $files['size']; ?></td>
                                                            <td class="text-center"><?= date('d M Y H:i', strtotime($files['delete_at'])); ?></td>
                                                            <td class="text-center">
                                                                <i class="icon-dots-three-horizontal dot" style="cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                                    <li>
                                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between" href="<?= URL; ?>/User/restore/<?= $files['id']; ?>">
                                                                            <span class="my-auto">Pulihkan</span>
                                                                            <i class="icon-rotate_left text-primary" style="font-size: 18px;"></i>
                                                                        </a>
                                                                    </li>
                                                                    <?php if (is_null($files['folderId'])) : ?>
                                                                        <li>
                                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnFiles" data-toggle="modal" data-target=".modalDeleteTrash" data-files="<?= $files['id']; ?>">
                                                                                <span class="my-auto">Hapus Permanen</span>
                                                                                <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                                            </button>
                                                                        </li>
                                                                    <?php else : ?>
                                                                        <li>
                                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnFol" data-toggle="modal" data-target=".modalDeleteTrashFolder" data-files="<?= $files['id']; ?>" data-direk="<?= $files['dir']; ?>">
                                                                                <span class="my-auto">Hapus Permanen</span>
                                                                                <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                                            </button>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <small>File</small>
                                    <hr class="mt-0 rounded-0 border-2">

                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif ($_SESSION['peran'] == 'editor') : ?>
                    <div class="nav-tabs-container" style="box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.311) ;">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link tab-link active" id="jpeg-tab3" data-toggle="tab" href="#jpeg" role="tab" aria-controls="jpeg" aria-selected="true"><i class="icon-image"></i>File</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent3" style="padding: .1rem;">
                            <div class="tab-pane fade show active" id="jpeg" role="tabpanel" aria-labelledby="jpeg-tab3">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="table-container border-0">
                                        <div class="table-responsive">
                                            <table id="pngTable" class="table custom-table border-0">
                                                <thead class="bg-white">
                                                    <tr>

                                                        <th class="text-center">Nama File</th>
                                                        <th class="text-center">Ekstensi</th>
                                                        <th class="text-center">Ukuran</th>
                                                        <th class="text-center">Tanggal Dihapus</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($data['trashShow'] as $files) : ?>
                                                        <tr>
                                                            <?php if (is_null($files['folderId'])) : ?>
                                                                <?php if ($files['ekstensi'] == 'jpg' || $files['ekstensi'] == 'png' || $files['ekstensi'] == 'jpeg' || $files['ekstensi'] == 'gif' || $files['ekstensi'] == 'tiff') : ?>
                                                                    <td class="baguetteBoxOne gallery">
                                                                        <div class="mb-0 d-flex justify-content-center">
                                                                            <i class="icon-image mr-1 my-auto" style="color:#366699;"></i>
                                                                            <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['nama'] ?>" data-caption="<?= $files['info']; ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php elseif ($files['ekstensi'] == 'mp4' || $files['ekstensi'] == 'MOV' || $files['ekstensi'] == 'mkv' || $files['ekstensi'] == 'MTS' || $files['ekstensi'] == 'avi') : ?>
                                                                    <td class="text-center">
                                                                        <div class="mb-0 text-center mx-auto">
                                                                            <i class="icon-video mr-2 my-auto" style="color:#338f50 ;"></i>
                                                                            <a class="border-0 mb-0 trashVidbtn playtrash" href="" data-toggle="modal" data-target=".modalplaytrash" data-caption="<?= $files['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['nama'] ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php elseif ($files['ekstensi'] == 'mp3' || $files['ekstensi'] == 'wav' || $files['ekstensi'] == 'wma' || $files['ekstensi'] == 'aac' || $files['ekstensi'] == 'flac' || $files['ekstensi'] == 'pcm' || $files['ekstensi'] == 'aiff' || $files['ekstensi'] == 'ogg') : ?>
                                                                    <td class="text-center">
                                                                        <div class="mb-0 text-center mx-auto">
                                                                            <i class="icon-music mr-2 my-auto text-center" style="color:#ba1d1d ;"></i>
                                                                            <a class="border-0 mb-0 trashAudbtn text-left playAudtrash" href="" data-toggle="modal" data-target=".modalplayAudtrash" data-caption="<?= $files['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['nama'] ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php endif; ?>
                                                            <?php else : ?>
                                                                <?php if ($files['ekstensi'] == 'jpg' || $files['ekstensi'] == 'png' || $files['ekstensi'] == 'jpeg' || $files['ekstensi'] == 'gif' || $files['ekstensi'] == 'tiff') : ?>
                                                                    <td class="baguetteBoxOne gallery">
                                                                        <div class="mb-0 d-flex justify-content-center">
                                                                            <i class="icon-image text-primary mr-1 my-auto"></i>
                                                                            <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['dir'] ?>/<?= $files['nama'] ?>" data-caption="<?= $files['info']; ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php elseif ($files['ekstensi'] == 'mp4' || $files['ekstensi'] == 'MOV' || $files['ekstensi'] == 'mkv' || $files['ekstensi'] == 'MTS' || $files['ekstensi'] == 'avi') : ?>
                                                                    <td>
                                                                        <div class="mb-0 text-center mx-auto">
                                                                            <i class="icon-video mr-2 my-auto" style="color:#338f50 ;"></i>
                                                                            <a class="border-0 mb-0 trashVidbtn playtrash" href="" data-toggle="modal" data-target=".modalplaytrash" data-caption="<?= $files['info']; ?>" data-video="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['dir'] ?>/<?= $files['nama'] ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php elseif ($files['ekstensi'] == 'mp3' || $files['ekstensi'] == 'wav' || $files['ekstensi'] == 'wma' || $files['ekstensi'] == 'aac' || $files['ekstensi'] == 'flac' || $files['ekstensi'] == 'pcm' || $files['ekstensi'] == 'aiff' || $files['ekstensi'] == 'ogg') : ?>
                                                                    <td>
                                                                        <div class="mb-0 text-center mx-auto">
                                                                            <i class="icon-music mr-2 my-auto" style="color:#ba1d1d ;"></i>
                                                                            <a class="border-0 mb-0 trashAudbtn playAudtrash" href="" data-toggle="modal" data-target=".modalplayAudtrash" data-caption="<?= $files['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $files['dir'] ?>/<?= $files['nama'] ?>"><?= $files['info']; ?>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <td class="text-center"><?= $files['ekstensi']; ?></td>
                                                            <td class="text-center"><?= $files['size']; ?></td>
                                                            <td class="text-center"><?= date('d M Y H:i', strtotime($files['delete_at'])); ?></td>
                                                            <td class="text-center">
                                                                <i class="icon-dots-three-horizontal dot" style="cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                </i>
                                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                                                    <li>
                                                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between" href="<?= URL; ?>/User/restore/<?= $files['id']; ?>">
                                                                            <span class="my-auto">Pulihkan</span>
                                                                            <i class="icon-rotate_left text-primary" style="font-size: 18px;"></i>
                                                                        </a>
                                                                    </li>
                                                                    <?php if (is_null($files['folderId'])) : ?>
                                                                        <li>
                                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnFiles" data-toggle="modal" data-target=".modalDeleteTrash" data-files="<?= $files['id']; ?>">
                                                                                <span class="my-auto">Hapus Permanen</span>
                                                                                <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                                            </button>
                                                                        </li>
                                                                    <?php else : ?>
                                                                        <li>
                                                                            <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnFol" data-toggle="modal" data-target=".modalDeleteTrashFolder" data-files="<?= $files['id']; ?>" data-direk="<?= $files['dir']; ?>">
                                                                                <span class="my-auto">Hapus Permanen</span>
                                                                                <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                                            </button>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <small>File</small>
                                    <hr class="mt-0 rounded-0 border-2">

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>


        </div>


        <!-- <div class="all">
            <div class="row gutters">
                <div class="col-12 d-flex flex-wrap px-3">
                    <?php foreach ($data['trashFolder'] as $folderTrash) : ?>
                        <div class="mx-2 position-relative" style="max-width: 13.666667%;">
                            <a href="#" class="position-absolute sub-nav-link dot" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="top:10px;right: 0;">
                                <i class="icon-dots-three-vertical" style="font-size: 15px;"></i>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between" href="<?= URL; ?>/User/pulihfolder/<?= $folderTrash['id']; ?>">
                                            <span class="my-auto">Pulihkan</span>
                                            <i class="icon-trash-2 text-warning" style="font-size: 18px;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between trashFolderDel" href="#" data-toggle="modal" data-target=".modalDeleteFolder" data-id="<?= $folderTrash['id'] ?>">
                                            <span class="my-auto">Hapus Selamanya</span>
                                            <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between" data-toggle="modal" data-target=".modalInfo" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($folderTrash['tanggal'])); ?>" data-folder="<?= $folderTrash['info']; ?>">
                                            <span class="my-auto">Info</span>
                                            <i class="icon-info text-info" style="font-size: 18px;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </a>
                            <div class="mb-0">
                                <form action="<?= URL; ?>/User/pageFolderView" method="POST">
                                    <input type="hidden" name="idFolder" value="<?= $folderTrash['id']; ?>">
                                    <div class="px-3">
                                        <button type="submit" class="dropdown-item judul text-center my-1 foldertrash">
                                            <div class="icon text-center">
                                                <i class="icon-folder" style="font-size: 42px; color: #e8b218;"></i>
                                            </div>
                                            <p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $folderTrash['info']; ?></p>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <small>Folder</small>
            <hr class="mt-0 rounded-0 border-2">
            <div class="row gutters">
                <div class="col-12 d-flex flex-wrap px-3">
                    <div class="baguetteBoxOne gallery">
                        <div class="row">
                            <?php foreach ($data['trashShow'] as $trash) : ?>
                                <?php if ($trash['ekstensi'] == 'jpg' || $trash['ekstensi'] == 'png' || $trash['ekstensi'] == 'jpeg' || $trash['ekstensi'] == 'gif' || $trash['ekstensi'] == 'tiff') : ?>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                        <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 5px; right: -4px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between" href="<?= URL; ?>/User/restore/<?= $trash['id']; ?>">
                                                    <span class="my-auto">Pulihkan</span>
                                                    <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtn" data-toggle="modal" data-target=".modalDelete" data-gambar="<?= $trash['id']; ?>">
                                                    <span class="my-auto">Hapus Permanen</span>
                                                    <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between gambarbtn" data-toggle="modal" data-target=".modalGambar" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($trash['created_at'])); ?>" data-gambar="<?= $trash['info']; ?>" data-size="<?= $trash['size']; ?>">
                                                    <span class="my-auto">Info</span>
                                                    <i class="icon-info text-info" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <?php if (is_null($trash['dir'])) : ?>
                                            <a href="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $trash['nama'] ?>" class="effects">
                                                <img src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $trash['nama'] ?>" class="img-fluid" alt="Wafi Admin">
                                                <div class="overlay">
                                                    <span class="expand"><i class="icon-image"></i></span>
                                                </div>
                                            </a>
                                            <p class="text-center" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $trash['info']; ?></p>
                                        <?php else : ?>
                                            <a href="<?= BASEURL; ?>/<?= $trash['dir']; ?>/<?= $trash['nama'] ?>" class="effects">
                                                <img src="<?= BASEURL; ?>/<?= $trash['dir']; ?>/<?= $trash['nama'] ?>" class="img-fluid" alt="Wafi Admin">
                                                <div class="overlay">
                                                    <span class="expand"><i class="icon-image"></i></span>
                                                </div>
                                            </a>
                                            <p class="text-center" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $trash['info']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <small>foto</small>
            <hr class="mt-0 rounded-0 border-2">
            <div class="row gutters">
                <div class="col-12 d-flex flex-wrap px-3">
                    <?php foreach ($data['trashShow'] as $trash) : ?>
                        <?php if ($trash['ekstensi'] == 'mp4' || $trash['ekstensi'] == 'MOV' || $trash['ekstensi'] == 'MTS' || $trash['ekstensi'] == 'mkv' || $trash['ekstensi'] == 'avi' || $trash['ekstensi'] == '3gp') : ?>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 5px; right: -19px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                    <li>
                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between" href="<?= URL; ?>/User/restore/<?= $trash['id']; ?>">
                                            <span class="my-auto">Pulihkan</span>
                                            <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtn" data-toggle="modal" data-target=".modalDelete" data-gambar="<?= $trash['id']; ?>">
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
                                <div class="vid-trash">
                                    <video src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $trash['nama']; ?>" disablePictureInPicture controls controlslist="nodownload noplaybackrate" muted width="180"></video>
                                    <p><?= $trash['info']; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <small>Video</small>
            <hr class="mt-0 rounded-0 border-2">

            <div class="row gutters">
                <div class="col-12 d-flex flex-wrap px-3">
                    <?php foreach ($data['trashShow'] as $trash) : ?>
                        <?php if ($trash['ekstensi'] == 'mp3' || $trash['ekstensi'] == 'aac' || $trash['ekstensi'] == 'wav' || $trash['ekstensi'] == 'wma' || $trash['ekstensi'] == 'flac' || $trash['ekstensi'] == 'ogg' || $trash['ekstensi'] == 'pcm' || $trash['ekstensi'] == 'aiff') : ?>
                            <div class="col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6">
                                <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 8px; right: 21px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                    <li>
                                        <a class="dropdown-item border-0 m-0 d-flex justify-content-between" href="<?= URL; ?>/User/restore/<?= $trash['id']; ?>">
                                            <span class="my-auto">Pulihkan</span>
                                            <i class="icon-delete_sweep text-warning" style="font-size: 18px;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtn" data-toggle="modal" data-target=".modalDelete" data-gambar="<?= $trash['id']; ?>">
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
                                <div class="aud border border-primary px-3 py-2 rounded" style="width: 100%;">
                                    <figure class="mb-0 text-center">
                                        <figcaption class="text-center">
                                            <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $trash['info']; ?></p>
                                        </figcaption>
                                        <audio src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $trash['nama']; ?>" height="200" width="150" controls controlslist="nodownload noplaybackrate"></audio>
                                    </figure>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <small>Audio</small>
            <hr class="mt-0 rounded-0 border-2">
        </div> -->


    </div>
    <!-- Content wrapper end -->

    <!-- modal info -->
    <div class="modal modalInfo fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" id="vCenterModal">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal folder Delete -->
    <div class="modal modalDeleteFolder animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" id="vCenterModal">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                    <!-- <h5 class="modal-title" id="">Hapus Folder</h5> -->
                    <!-- <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <form action="<?= URL; ?>/User/hapusFolderTrash" method="POST">
                    <div class="modal-body pb-1 text-center">
                        <input id="folderIdtrash" type="hidden" name="folderId" value="">
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



    <!-- modal Delete -->
    <div class="modal modalDeleteTrash animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-size">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <form action="<?= URL; ?>/User/hapusFiles" method="POST">
                    <div class="modal-body text-center">
                        <input id="filesId" type="hidden" name="filesId" value="">
                        <i class="icon-warning text-danger pt-1 mb-4 d-block" style="font-size: 50px;"></i>
                        <h3 class="mb-2"> Anda Yakin Untuk Menghapus file Ini?</h3>
                        <p class="text-danger">file yang dihapus tidak dapat dipulihkan!!!</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal Delete files on folder -->
    <div class="modal modalDeleteTrashFolder animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-size">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <form action="<?= URL; ?>/User/hapusFilesFolder" method="POST">
                    <div class="modal-body text-center">
                        <input id="idFiles" type="hidden" name="idFiles" value="">
                        <input type="hidden" name="direktori" id="direktori" value="">
                        <i class="icon-warning text-danger pt-1 mb-4 d-block" style="font-size: 50px;"></i>
                        <h3 class="mb-2"> Anda Yakin Untuk Menghapus file Ini?</h3>
                        <p class="text-danger">file yang dihapus tidak dapat dipulihkan!!!</p>
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
    <div class="modal modalfolder fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-size">
            <div class="modal-content border-0 bg-transparent" style="border-radius: unset;">
                <div class="modal-header bg-warning rounded-0">
                    <div class="alert" role="alert" style="padding: .25rem .75rem; margin-bottom:0rem ;">
                        <i class="icon-warning"></i>Pulihkan Folder Untuk Melihat File.
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal info -->
    <div class="modal modalplaytrash fade p-0" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl x">
            <div class="modal-content x">
                <div class="modal-header x px-5">
                    <h5 class="modal-title" id=""></h5>
                    <button type="button" class="closetrash x" data-dismiss="modal" aria-label="Close">
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

    <div class="modal modalplayAudtrash x fade p-0" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered x">
            <div class="modal-content position-relative x border-0">
                <div class="modal-header px-5 position-absolute x" style="right: 29%; top: -10%; z-index: 99;">
                    <h5 class="modal-title" id=""></h5>
                    <button type="button" class="closeAudtrash" data-dismiss="modal" aria-label="Close">
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

    <div class="modal modalsuksesHapus animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Data Berhasil Dipulihkan</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesHapusfolder animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
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

    <div class="modal modalsukses animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">File Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>