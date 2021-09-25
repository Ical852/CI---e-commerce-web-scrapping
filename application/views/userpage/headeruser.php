<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CariCabee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets3/img/chilli.png');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/font-awesome/4.5.0/css/font-awesome.min.css');?>">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.theme.default.min.css');?>">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/core.css');?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/shortcode/shortcodes.css');?>">
    <!-- Theme main style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css');?>">
    <!-- User style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css');?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/dataTables.bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/responsive.bootstrap.min.css');?>">
      
    <!-- <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery.dataTables.js');?>"></script> -->
      
    <script type="text/javascript" src="<?php echo base_url('assets1/js/ace-extra.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery-2.1.4.min.js');?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js');?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white" style="background-color: lightgreen;">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header" style="background-color: lightgreen;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="<?php echo site_url ('userpage') ?>">
                                    <img src="<?php echo base_url('assets/images/logo/Caricabee.png');?>" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="<?php echo site_url ('bukutamuuser') ?>">Buku Tamu</a> </li>
                                    <li class="drop"><a href="<?php echo site_url ('userpage') ?>">Home</a></li>
                                    <li class="drop"><a href="<?php echo site_url ('shopuser') ?>">Our Product</a></li>
                                    <li class="drop"><a href="<?php echo site_url ('shopscrapuser') ?>">Shop</a></li>
                                </ul>
                            </nav>

                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="index.html">Shop</a></li>
                                        <li><a href="index.html">Produk Kami</a></li>
                                        <li><a href="index.html">Buku Tamu</a></li>
            
                                    </ul>
                                </nav>
                            </div>                          
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3">  
                            <ul class="menu-extra">
                                <li><a href="<?php echo site_url ('auth') ?>"><span class="ti-user">Login/Register</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>