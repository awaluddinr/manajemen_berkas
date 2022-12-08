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
                            <img src="<?= BASEURL; ?>/media/img/<?= $data['profile']['gambar']; ?>" alt="avatar">
                            <span class="status online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <div class="header-user-profile">
                                <div class="header-user">
                                    <img src="<?= BASEURL; ?>/media/img/<?= $data['profile']['gambar']; ?>" alt="Admin Template">
                                </div>

                                <h5><?= $data['profile']['info']; ?></h5>
                                <p><?= $_SESSION['peran']; ?></p>

                            </div>
                            <a href="<?= URL; ?>/Home/my_profile/"><i class="icon-user1"></i> My Profile</a>
                            <a href="<?= URL; ?>/Home/logout"><i class="icon-log-out1"></i> Sign Out</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Header actions end -->
        </div>
    </header>
    <!-- Header end -->