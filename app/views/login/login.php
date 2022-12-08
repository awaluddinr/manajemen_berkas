<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>Login</title>

    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/Ubootstrap.min.css" />

    <!-- Master CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/main-u.css" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/fonts/style.css">
    <script>
        // penting sekalinya
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</head>

<body class="authentication">

    <!-- Container start -->
    <div class="container">


        <form action="<?= URL; ?>/Log/masuk" method="POST">
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-screen">
                        <div class="login-box">
                            <div class="logo text-center mb-3" style="color: #3d90e9;">
                                <i class="icon-laptop img-thumbnail rounded-pill" style="font-size: 70px;"></i>
                            </div>
                            <h5>Selamat Datang,<br />Silahkan Masuk Dengan Akun Anda.</h5>
                            <div class="row">
                                <div class="col-12">
                                    <?php if (isset($_SESSION['no_user'])) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?= $_SESSION['no_user']; ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <?php unset($_SESSION['no_user']); ?>
                                        </div>
                                    <?php elseif (isset($_SESSION['password'])) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong><?= $_SESSION['password']; ?></strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php unset($_SESSION['password']); ?>
                                        </div>
                                    <?php elseif (isset($_SESSION['username'])) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong><?= $_SESSION['username']; ?></strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php unset($_SESSION['username']); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="user">Username:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Username" name="user" id="user" />
                            </div>
                            <div class="form-group">
                                <label for="pass">Password:</label>
                                <input type="password" class="form-control form-password" placeholder="Masukkan Password" name="pass" id="pass" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="check" id="check" class="form-checkbox">
                                <label for="check">Lihat Password</label>
                            </div>
                            <div class=" d-flex mb-4 justify-content-center">
                                <button type="submit" class="btn col-xl-7 text-white" style="background-color:#3d90e9;">Masuk</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- Container end -->


    <script src="<?= BASEURL; ?>/js/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL; ?>/js/moment.js"></script>


    <!-- *************
			************ Vendor Js Files *************
		************* -->
    <!-- Slimscroll JS -->
    <script src="<?= BASEURL; ?>/vendors/slimscroll/slimscroll.min.js"></script>
    <script src="<?= BASEURL; ?>/vendors/slimscroll/custom-scrollbar.js"></script>

    <!-- Daterange -->
    <script src="<?= BASEURL; ?>/vendors/daterange/daterange.js"></script>
    <script src="<?= BASEURL; ?>/vendors/daterange/custom-daterange.js"></script>

    <!-- Chartist JS -->
    <script src="<?= BASEURL; ?>/vendors/chartist/js/chartist.min.js"></script>
    <script src="<?= BASEURL; ?>/vendors/chartist/js/chartist-tooltip.js"></script>
    <script src="<?= BASEURL; ?>/vendors/chartist/js/custom/pie/pie-charts3.js"></script>
    <script src="<?= BASEURL; ?>/vendors/chartist/js/custom/area/custom-area-chart.js"></script>
    <script src="<?= BASEURL; ?>/vendors/chartist/js/custom/area/custom-area-chart2.js"></script>
    <script src="<?= BASEURL; ?>/vendors/chartist/js/custom/bar/bar-chart.js"></script>

    <!-- Main Js Required -->
    <script src="<?= BASEURL; ?>/js/main-u.js"></script>
    <script>
        (function($) {
            $.fn.bmcModal = function() {
                var self = $(this);

                if (self.attr('data-animate-in')) {
                    self.addClass('animate__animated');
                    self.addClass(self.attr('data-animate-in'));
                }

                self.on('hide.bs.modal', function(event) {
                        if (!self.attr('data-end-hide') && self.attr('data-animate-out')) {
                            event.preventDefault();

                            self.addClass(self.attr('data-animate-out'));
                            if (self.attr('data-animate-in')) {
                                self.removeClass(self.attr('data-animate-in'));
                            }
                        }
                        self.removeAttr('data-end-hide');
                    })
                    .on('animationend', function() {
                        if (self.attr('data-animate-out') && self.hasClass(self.attr('data-animate-out'))) {
                            self.attr('data-end-hide', true);
                            self.modal('hide');
                            self.removeClass(self.attr('data-animate-out'));
                            if (self.attr('data-animate-in')) {
                                self.addClass(self.attr('data-animate-in'));
                            }
                        }
                    })
            };

            $(document).ready(function() {
                $('.modalsukses').bmcModal();
            })
        })(jQuery);
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.form-password').attr('type', 'text');
                } else {
                    $('.form-password').attr('type', 'password');
                }
            });
        });
    </script>


</body>

</html>