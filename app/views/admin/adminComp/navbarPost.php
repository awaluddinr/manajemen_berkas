<!-- Page content start  -->
<div class="page-content">

    <!-- Header start -->
    <header class="header">
        <div class="toggle-btns">
            <a id="toggle-sidebar" href="#">
                <i class="icon-list"></i>
            </a>
            <a id="pin-sidebar" href="#">
                <i class="icon-list"></i>
            </a>
        </div>
        <div class="header-items">
            <!-- Custom search start -->
            <div class="custom-search">
                <input type="text" class="search-query" placeholder="Search here ...">
                <i class="icon-search1"></i>
            </div>
            <!-- Custom search end -->

            <!-- Header actions start -->
            <ul class="header-actions">
                <li class="dropdown">
                    <a href="#" id="userSettings" class="user-settings prf" data-toggle="dropdown" aria-haspopup="true">
                        <span class="avatar">
                            <img src="<?= BASEURL; ?>/media/img/<?= $data['userid']['gambar']; ?>" alt="avatar">
                            <span class="status online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <div class="header-user-profile">
                                <div class="header-user">
                                    <img src="<?= BASEURL; ?>/media/img/<?= $data['userid']['gambar']; ?>" alt="Admin Template">
                                </div>
                                <h5><?= $data['userid']['nama']; ?></h5>
                                <p><?= $_SESSION['peran']; ?></p>
                            </div>
                            <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                            <a href="<?= URL; ?>/Home/logout"><i class="icon-log-out1"></i> Sign Out</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Header actions end -->
        </div>
    </header>
    <!-- Header end -->

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Postingan Pengguna</li>
            <li class="breadcrumb-item"><?= $data['userid']['info']; ?></li>
        </ol>
    </div>
    <!-- Page header end -->


    <!-- Content wrapper start -->
    <div class="main-container">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="documents-section">
                    <!-- Row start -->
                    <div class="row no-gutters">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4 position-relative" style="z-index: 1;">
                            <div class="docs-type-container">
                                <div class="docTypeContainerScroll">
                                    <div class="docs-block">
                                        <div class="doc-labels" id="myDIV">
                                            <?php if ($data['userid']['peran'] == 'footager') : ?>
                                                <!-- <form action="<?= URL; ?>/Home/user_folder" method="POST">
                                                    <input type="hidden" name="iduser" value="<?= base64_encode($data['userid']['id']); ?>">
                                                    <button class="tombol" type="submit">
                                                        <i class="icon-folder"></i> Folder
                                                    </button>
                                                </form> -->
                                                <a class="ini-link" href="<?= URL; ?>/Home/user_folder/<?= base64_encode($data['userid']['id']); ?>">
                                                    <i class="icon-folder"></i> Folder
                                                </a>
                                                <a class="ini-link" href="<?= URL; ?>/Home/user_Image/<?= base64_encode($data['userid']['id']); ?>">
                                                    <i class="icon-image"></i> Foto
                                                </a>
                                                <a class="ini-link" href="<?= URL; ?>/Home/user_Video/<?= base64_encode($data['userid']['id']); ?>">
                                                    <i class="icon-video"></i> Video
                                                </a>
                                                <a class="ini-link" href="<?= URL; ?>/Home/user_Audio/<?= base64_encode($data['userid']['id']); ?>">
                                                    <i class="icon-music"></i> Audio
                                                </a>
                                            <?php else : ?>
                                                <a class="ini-link" href="<?= URL; ?>/Home/user_Image/<?= base64_encode($data['userid']['id']); ?>">
                                                    <i class="icon-image"></i> Foto
                                                </a>
                                                <a class="ini-link" href="<?= URL; ?>/Home/user_Video/<?= base64_encode($data['userid']['id']); ?>">
                                                    <i class="icon-video"></i> Video
                                                </a>
                                                <a class="ini-link" href="<?= URL; ?>/Home/user_Audio/<?= base64_encode($data['userid']['id']); ?>">
                                                    <i class="icon-music"></i> Audio
                                                </a>
                                                <a class="ini-link" href="<?= URL; ?>/Home/user_VideoAkhir/<?= base64_encode($data['userid']['id']); ?>">
                                                    <i class="icon-video_call"></i> Video Akhir
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>