<!DOCTYPE html>
<html>

<!-- Mirrored from preview.oklerthemes.com/porto/4.8.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2016 14:31:00 GMT -->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Mahartha Handicraft</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>frontend/assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>frontend/assets/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/theme-elements.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/theme-blog.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/theme-shop.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/theme-animate.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/vendor/circle-flip-slideshow/css/component.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/custom.css">

    <!-- Head Libs -->
    <script src="<?= base_url() ?>frontend/assets/vendor/modernizr/modernizr.min.js"></script>

</head>
<body class="loading-overlay-showing" data-loading-overlay>
<div class="loading-overlay">
    <div class="loader"></div>
</div>
<div class="body">
    <header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="<?= base_url() ?>">
                                <img alt="Porto" width="200" height="70" data-sticky-width="150" data-sticky-height="50" data-sticky-top="33" src="<?= base_url() ?>frontend/assets/img/LOGO.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-search hidden-xs">
                                <form id="searchForm" action="<?= base_url('/search') ?>" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                        <span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
                                    </div>
                                </form>
                            </div>
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <?php if($this->session->isLogedIn && $this->session->type == 1): ?>
                                        <li class="hidden-xs">
                                            <a href="<?= base_url("/logout") ?>"><i class="fa fa-angle-right"></i> Sign-out</a>
                                        </li>
                                    <?php else: ?>
                                        <li class="hidden-xs">
                                            <a href="<?= base_url("/login") ?>"><i class="fa fa-angle-right"></i> Sign-in</a>
                                        </li>
                                        <li class="hidden-xs">
                                            <a href="<?= base_url("/register") ?>"><i class="fa fa-angle-right"></i> Register</a>
                                        </li>
                                    <?php endif; ?>
                                    <li>
                                        <span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <?php $this->load->view('frontend/menu') ?>

                    </div>
                </div>
            </div>
        </div>
    </header>
