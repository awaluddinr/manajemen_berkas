<!-- Container fluid start -->
<div class="container-fluid">

    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar" aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="WafiAdminNavbar">
            <?php if ($_SESSION['peran'] == 'footager') : ?>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= URL; ?>/User">
                            <i class="icon-devices_other nav-icon"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= URL; ?>/User/folder_create" class="nav-link">
                            <i class="icon-folder_shared nav-icon"></i>
                            <span class="menu-text">Kelola Folder</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-file-plus nav-icon"></i>
                            Kelola File
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <li>
                                <a class="dropdown-item" href="<?= URL; ?>/User/pageImage">Foto</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= URL; ?>/User/pageVideo">Video</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= URL; ?>/User/pageAudio">Audio</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= URL; ?>/User/trash" class="nav-link">
                            <i class="icon-trash nav-icon"></i>
                            <span class="menu-text">Sampah</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="uiElementsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-instagram nav-icon"></i>
                            Postingan Pengguna
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">
                            <?php foreach ($data['jumlahUploader'] as $uploader) : ?>
                                <li>
                                    <form action="<?= URL; ?>/User/userfolder/" method="POST">
                                        <input type="hidden" name="idFolder" value="<?= $_SESSION['id'] = $uploader['id'] ?>" id="">
                                        <button type="submit" class="dropdown-item">
                                            <?= $uploader['info']; ?>
                                        </button>
                                    </form>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li> -->
                </ul>
            <?php elseif ($_SESSION['peran'] == 'editor') : ?>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= URL; ?>/User">
                            <i class="icon-devices_other nav-icon"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-file-plus nav-icon"></i>
                            Manajemen File
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <li>
                                <a class="dropdown-item" href="<?= URL; ?>/User/pageImage">Foto</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= URL; ?>/User/pageVideo">Video</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= URL; ?>/User/pageAudio">Audio</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= URL; ?>/User/trash" class="nav-link">
                            <i class="icon-trash nav-icon"></i>
                            <span class="menu-text">Sampah</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="uiElementsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-instagram nav-icon"></i>
                            Postingan Pengguna
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">
                            <?php foreach ($data['jumlahuser'] as $user) : ?>
                                <li>
                                    <form action="<?= URL; ?>/User/userfolder/" method="POST">
                                        <input type="hidden" name="idFolder" value="<?= $user['id'] ?>" id="">
                                        <button type="submit" class="dropdown-item">
                                            <?= $user['info']; ?>
                                        </button>
                                    </form>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= URL; ?>/User/rekap_video" class="nav-link">
                            <i class="icon-camera nav-icon"></i>
                            <span class="menu-text">Video Akhir Tahun</span>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
    <!-- Navigation end -->