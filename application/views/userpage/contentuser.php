<?php
require('scrapcontent.php');
?>
        <!-- End Offset Wrapper -->
        <!-- Start Feature Product -->
        <section class="categories-slider-area bg__white"><br>
            <div class="container">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                        <!-- Start Slider Area -->
                        <div class="slider__container slider--one">
                            <div class="slider__activation__wrap owl-carousel owl-theme">
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url(assets/img/cabe.jpeg) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1>Welcome To <span class="text--theme">CariCabee.com</span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="<?php echo base_url('shopscrapuser');?>" style="color: white ">kuy belanja</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit  slider-text-left" style="background: rgba(0, 0, 0, 0) url(assets/img/cabe1.jpg) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1>Cabe Asli <span class="text--theme">Hidroponik</span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="<?php echo base_url('shopuser');?>" style="color: white ">kuy belanja produk kami</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                            </div>
                        </div>
                        <!-- Start Slider Area -->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                        <div class="categories-menu mrg-xs">
                            <div class="category-heading">
                               <h3> Browse Categories</h3>
                            </div>
                            <div class="category-menu-list">
                                <ul>
                                    <li><a href="<?php echo base_url('bukutamuuser');?>"><img alt="" src="images/icons/thum2.png"> Buku Tamu <i class="zmdi zmdi-chevron-right"></i></a>
                                    <li><a href="<?php echo base_url('userpage');?>"><img alt="" src="images/icons/thum2.png"> Home <i class="zmdi zmdi-chevron-right"></i></a>
                                    <li><a href="<?php echo base_url('shopuser');?>"><img alt="" src="images/icons/thum2.png"> Our Product <i class="zmdi zmdi-chevron-right"></i></a>
                                    <li><a href="<?php echo base_url('shopscrapuser');?>"><img alt="" src="images/icons/thum2.png"> Shop <i class="zmdi zmdi-chevron-right"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Left Feature -->
                </div>
            </div>
        </section>
        <!-- End Feature Product -->
        <div class="only-banner ptb--100 bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="#"><img src="<?php echo base_url('assets/img/cabetes.png');?>" alt="new product"></a>
                </div>
            </div>
        </div>
        <!-- Start Our Product Area -->
        <section class="htc__product__area bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title section__title--2 text-center">
                            <strong><h2 class="title__line">Check Our Product</h2></strong><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-style-tab">
                            <div class="product-tab-list">
                                <!-- Nav tabs -->
                                <ul class="tab-style" role="tablist">
                                    <li class="active">
                                        <a href="#home1" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Red Group </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home2" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Unique </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home3" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Eyecatching</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home4" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>on sale</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content another-product-style jump">


                                <div class="tab-pane active" id="home1">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            
                                            <?php foreach ($cabe as $cb) : ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="<?php echo('shopuser/detailproduk/'.$cb->kode_cabe) ?>" target="_blank">
                                                                <img src="<?php echo base_url().'/upload/'.$cb->img ;?>" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal1<?php echo $cb->kode_cabe; ?>" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Check Shop Page" href="<?php echo base_url('shopuser');?>" target="_blank"><span class="ti-shopping-cart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="<?php echo('shopuser/detailproduk/'.$cb->kode_cabe) ?>" target="_blank"><?php echo $cb->nama_cabe ?></a></h2>
                                                        <ul class="product__price">
                                                            <li class="new__price">Rp. <?php echo number_format($cb->harga,0,',','.') ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="home2">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">

                                            <?php foreach ($cabe2 as $cb2) : ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="<?php echo('shopuser/detailproduk/'.$cb2->kode_cabe) ?>" target="_blank">
                                                                <img src="<?php echo base_url().'/upload/'.$cb2->img ;?>" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal2<?php echo $cb2->kode_cabe; ?>" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Check Shop Page" href="<?php echo base_url('shopuser');?>" target="_blank"><span class="ti-shopping-cart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="<?php echo('shopuser/detailproduk/'.$cb2->kode_cabe) ?>" target="_blank"><?php echo $cb2->nama_cabe ?></a></h2>
                                                        <ul class="product__price">
                                                            <li class="new__price">Rp. <?php echo number_format($cb2->harga,0,',','.') ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane" id="home3">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">

                                            <?php foreach ($cabe3 as $cb3) : ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="<?php echo('shopuser/detailproduk/'.$cb3->kode_cabe) ?>" target="_blank">
                                                                <img src="<?php echo base_url().'/upload/'.$cb3->img ;?>" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal3<?php echo $cb3->kode_cabe; ?>" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Check Shop Page" href="<?php echo base_url('shopuser');?>" target="_blank"><span class="ti-shopping-cart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="<?php echo('shopuser/detailproduk/'.$cb3->kode_cabe) ?>" target="_blank"><?php echo $cb3->nama_cabe ?></a></h2>
                                                        <ul class="product__price">
                                                            <li class="new__price">Rp. <?php echo number_format($cb3->harga,0,',','.') ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane" id="home4">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">

                                            <?php foreach ($cabe4 as $cb4) : ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="<?php echo('shopuser/detailproduk/'.$cb4->kode_cabe) ?>" target="_blank">
                                                                <img src="<?php echo base_url().'/upload/'.$cb4->img ;?>" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal4<?php echo $cb4->kode_cabe; ?>" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Check Shop Page" href="<?php echo base_url('shopuser');?>" target="_blank"><span class="ti-shopping-cart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="<?php echo('shopuser/detailproduk/'.$cb4->kode_cabe) ?>" target="_blank"><?php echo $cb4->nama_cabe ?></a></h2>
                                                        <ul class="product__price">
                                                            <li class="new__price">Rp. <?php echo number_format($cb4->harga,0,',','.') ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        <div class="only-banner ptb--100 bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="#"><img src="<?php echo base_url('assets/img/cabewa.jpg');?>" alt="new product"></a>
                </div>
            </div>
        </div>
        <!-- Start Our Product Area -->
        <section class="htc__product__area pb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title section__title--2 text-center">
                            <strong><h2 class="title__line">Or Check Other's Product</h2></strong><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-style-tab">
                            <div class="product-tab-list">
                                <!-- Nav tabs -->
                                <ul class="tab-style" role="tablist">
                                    <li class="active">
                                        <a href="#home5" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Agromaret </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home6" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Bibit Online </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home7" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Klik Indomaret </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home8" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Top E-Commerce</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content another-product-style jump">



                                <div class="tab-pane active" id="home5">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">

                                            <?php foreach ($products1 as $product1) : ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="<?= $product1['link'] ?>" target="_blank">
                                                                <img style="width: 400px; height: 250px;" src="<?= $product1['img'] ?>" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a href="<?= $product1['link'] ?>" target="_blank"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Check Shop Page" href="<?php echo base_url('shopscrapuser');?>" target="_blank"><span class="ti-shopping-cart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="<?= $product1['link'] ?>" target="_blank"><?= $product1['title'] ?></a></h2>
                                                        <ul class="product__price">
                                                            <li class="new__price"><?= $product1['harga1'] ?><?= $product1['harga2'] ?><?= $product1['harga'] ?></li>
                                                            <li><img style="width: 70px; text-align: right;" src="<?= $product1['logo'] ?>"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane" id="home6">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">

                                            <?php foreach ($products4 as $product2) : ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="<?= $product2['link'] ?>" target="_blank">
                                                                <img style="width: 400px; height: 250px;" src="<?= $product2['img'] ?>" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a href="<?= $product2['link'] ?>" target="_blank"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Check Shop Page" href="<?php echo base_url('shopscrapuser');?>" target="_blank"><span class="ti-shopping-cart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="<?= $product2['link'] ?>" target="_blank"><?= $product2['title'] ?></a></h2>
                                                        <ul class="product__price">
                                                            <li class="new__price"><?= $product2['harga1'] ?></li>
                                                            <li><img style="width: 70px; text-align: right;" src="<?= $product2['logo'] ?>"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane" id="home7">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">

                                            <?php foreach ($products10 as $product3) : ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="https://www.klikindomaret.com/<?= $product3['link'] ?>" target="_blank">
                                                                <img style="width: 400px; height: 250px;" src="<?= $product3['img'] ?>" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a href="https://www.klikindomaret.com/<?= $product3['link'] ?>" target="_blank"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Check Shop Page" href="<?php echo base_url('shopscrapuser');?>" target="_blank"><span class="ti-shopping-cart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="https://www.klikindomaret.com/<?= $product3['link'] ?>" target="_blank"><?= $product3['title'] ?></a></h2>
                                                        <ul class="product__price">
                                                            <li class="new__price"><?= $product3['harga'] ?></li>
                                                            <li><img style="width: 70px; text-align: right;" src="https://www.klikindomaret.com/Assets/image/logo.png"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane" id="home8">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">

                                            <?php foreach ($products9 as $product4) : ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="https://iprice.co.id<?= $product4['link'] ?>" target="_blank">
                                                                <img style="width: 400px; height: 250px;" src="<?= $product4['img'] ?>" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a href="https://iprice.co.id<?= $product4['link'] ?>" target="_blank"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Check Shop Page" href="<?php echo base_url('shopscrapuser');?>" target="_blank"><span class="ti-shopping-cart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="https://iprice.co.id<?= $product4['link'] ?>" target="_blank"><?= $product4['title'] ?></a></h2>
                                                        <ul class="product__price">
                                                            <li class="new__price"><?= $product4['harga'] ?></li><br>
                                                            <li><img style="width: 70px;" src="<?= $product4['logo'] ?>"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        <div class="only-banner bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="#"><img src="<?php echo base_url('assets/img/cabean.jpg');?>" alt="new product"></a>
                </div>
            </div>
        </div>
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white pb--130"><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line">Latest Order</h2><hr style="margin: 10px; border: solid black; border-width: 1px;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog__wrap clearfix mt--60 xmt-30">


                        <!-- Start Single Blog -->
                        <?php foreach ($top as $top) : ?>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                            <img src="<?php echo base_url().'/upload/'.$top->gambar; ?>" alt="blog images">
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des" style="text-shadow: 0 0 30px black; color: white;"><?php echo $top->nama_cabe; ?></p>
                                            <ul class="bl__meta">
                                                <li style="text-shadow: 0 0 30px black; color: white;">By : <?php echo $top->email; ?></li><br>
                                            </ul>
                                            <p style="text-shadow: 0 0 30px black; color: white;" class="blog__des"><?php echo $top->tanggal; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- End Single Blog -->

                        
                    </div>
                </div>
            </div>
        </section>


        <!-- End Bradcaump area -->
        <!-- Start Our Team Area -->
        <section class="htc__team__area htc__team__page bg__white ptb--120">

            <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/team.png');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Team</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?php echo base_url('userpage');?>">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Team</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><hr><br><br>
            <div class="container">
                <div class="row">
                    <div class="team__wrap clearfix">
                        <!-- Start Single Team -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="team foo">
                                <h2 class="text-center"><strong><a href="#">Project Manager</a></strong></h2><br>
                                <div class="team__thumb">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/img/team3.jpg');?>" alt="team images">
                                    </a>
                                </div>
                                <div class="team__bg__color"></div>
                                <div class="team__hover__info">
                                    <div class="team__hover__action">
                                        <h2><a href="#">Muhammad Faldy Faza</a></h2>
                                        <ul class="social__icon">
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->
                        <!-- Start Single Team -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="team foo">
                                <h2 class="text-center"><strong><a href="#">System Analyst</a></strong></h2><br>
                                <div class="team__thumb">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/img/team2.png');?>" alt="team images">
                                    </a>
                                </div>
                                <div class="team__bg__color"></div>
                                <div class="team__hover__info">
                                    <div class="team__hover__action">
                                        <h2><a href="#">Rivo Yajnatantra Izzulhaq</a></h2>
                                        <ul class="social__icon">
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->
                        <!-- Start Single Team -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="team foo">
                                <h2 class="text-center"><strong><a href="#">Fullstack Programmer</a></strong></h2><br>
                                <div class="team__thumb">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/img/team1.jpg');?>" alt="team images">
                                    </a>
                                </div>
                                <div class="team__bg__color"></div>
                                <div class="team__hover__info">
                                    <div class="team__hover__action">
                                        <h2><a href="#">Shalahuddin Ahmad Aziz</a></h2>
                                        <ul class="social__icon">
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->
                    </div>
                </div>
            </div>
        </section>