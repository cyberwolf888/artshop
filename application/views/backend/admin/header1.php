<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?= base_url() ?>backend/assets/img/favicon.html">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>backend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>backend/assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url() ?>backend/assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>backend/assets/assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link href="<?= base_url() ?>backend/assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/css/owl.carousel.css" type="text/css">

    <!--dynamic table-->
    <link href="<?= base_url() ?>backend/assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?= base_url() ?>backend/assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/assets/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>backend/assets/assets/datatables/buttons.dataTables.min.css">

    <!--right slidebar-->
    <link href="<?= base_url() ?>backend/assets/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="<?= base_url() ?>backend/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>backend/assets/css/style-responsive.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?= base_url() ?>backend/assets/js/html5shiv.js"></script>
    <script src="<?= base_url() ?>backend/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="<?= base_url('admin') ?>" class="logo">Admin</a>
        <!--logo end-->

        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <?php if($this->session->photo == ""): ?>
                            <img alt="" src="<?= base_url() ?>backend/assets/img/avatar1_small.jpg">
                        <?php else: ?>
                            <img alt="" src="<?= base_url() ?>images/profile/admin/<?= $this->session->photo ?>" width="30" height="30">
                        <?php endif; ?>
                        <span class="username"><?= $this->session->fullname ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"></a></li>
                        <li><a href="<?= base_url('admin/profile/edit') ?>"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="#"> </a></li>
                        <li><a href="<?= base_url('logout') ?>"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <?php $this->load->view('backend/admin/menu') ?>
    <!--sidebar end-->
    <!--main content start-->
