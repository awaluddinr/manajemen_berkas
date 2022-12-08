<!-- *************
			************ Header section start *************
		************* -->

<!-- Header start -->
<header class="header">
    <div class="logo-wrapper">
        <a href="<?= URL; ?>/User" class="logo d-flex">
            <!-- <img src="<?= BASEURL; ?>/media/img/logo.png" alt="Le Rouge Admin Dashboard" /> -->
            <h3 class="mb-0 mr-1"><i class="icon-laptop img-thumbnail rounded-circle p-1" style="color: #00a1b9;"></i></h3>
            <span style="font-size: 16px; color: white;" class="pl-1 mt-1">User File</span>
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
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="avatar">
                        <img class="rounded-pill" src="<?= BASEURL; ?>/media/img/<?= $_SESSION['loginData']['gambar']; ?>" alt="Admin Template" />
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="<?= BASEURL; ?>/media/img/<?= $_SESSION['loginData']['gambar']; ?>" alt="">
                            </div>
                            <?php if (isset($_SESSION['loginData']['info'])) : ?>
                                <h5><?= $_SESSION['loginData']['info']; ?></h5>
                            <?php endif; ?>
                            <p><?= $_SESSION['peran']; ?></p>
                        </div>
                        <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                        <a href="<?= URL; ?>/User/logout"><i class="icon-log-out1"></i> Sign Out</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->

<!-- Screen overlay start -->
<div class="screen-overlay"></div>
<!-- Screen overlay end -->

<!-- *************
			************ Header section end *************
		************* -->