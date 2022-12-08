        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

            <!-- Sidebar brand start  -->
            <div class="sidebar-brand mb-0" style="background-color: #00a1b9;">
                <a href="<?= URL; ?>/dashboard" class="logo">
                    <!-- <img src="<?= BASEURL; ?>/media/img/logo.png" alt="Le Rouge Admin Dashboard" /> -->
                    <h2 class="mb-0 mr-2"><i class="icon-laptop img-thumbnail rounded-circle p-1" style="color: #00a1b9;"></i></h2>
                    <span style="font-size: 20px; color: white;" class="pl-2">Admin File</span>
                </a>
            </div>
            <!-- Sidebar brand end  -->

            <!-- Sidebar content start -->
            <div class="sidebar-content" style="overflow: auto;">

                <!-- sidebar menu start -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">General</li>
                        <li class="">
                            <a href="<?= URL; ?>/Home">
                                <i class="icon-devices_other"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= URL; ?>/Home/Kelola_User">
                                <i class="icon-user-plus"></i>
                                <span class="menu-text">Kelola User</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= URL; ?>/Home/user_akses">
                                <i class="icon-info"></i>
                                <span class="menu-text">Info User Akses</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= URL; ?>/Home/aktivitas">
                                <i class="icon-filter_list"></i>
                                <span class="menu-text">Aktivitas Pengguna</span>
                            </a>
                        </li>
                        <li class="header-menu">User Control</li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="icon-file_upload"></i>
                                <span class="menu-text">Postingan Pengguna</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <?php foreach ($data['user'] as $user) : ?>
                                        <li>
                                            <!-- <form class="tombol" action="<?= URL; ?>/Home/userF" method="POST">
                                                <input type="hidden" name="iduser" value="<?= base64_encode($user['id']); ?>">
                                                <button class="border-0 px-3" style="background: transparent;" type="submit">
                                                    <?= $user['nama']; ?>
                                                </button>
                                            </form> -->
                                            <a href="<?= URL; ?>/Home/user_dashboard/<?= base64_encode($user['id']); ?>"><?= $user['info']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end -->

            </div>
            <!-- Sidebar content end -->

        </nav>
        <!-- Sidebar wrapper end -->