<?php  
require('scrap.php');
 ?>

    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/cabean.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">Shop Page</h2>
                                <nav class="bradcaump-inner">
                                  <a  style="color: white;" class="breadcrumb-item" href="index.html">Home</a>
                                  <span style="color: white;" class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">Shop Page</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header gambar -->
        
        <section class="htc__product__area shop__page ptb--50 bg__white"><!-- Section -->
            <div class="container"><!-- container awal -->
                <div class="htc__product__container"><!-- product container -->

                    <a href="<?php echo site_url ('shop') ?>"><button class="btn btn-info">< Our Product</button></a>
                    
                    <!-- Filter -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu"><br>
                                    <button data-filter="*"  class="is-checked">All</button>
                                    <button data-filter=".cat--1">Agromaret</button>
                                    <button data-filter=".cat--2">Bibit Online</button>
                                    <button data-filter=".cat--3">Sentratani</button>
                                    <button data-filter=".cat--4">Cari Sayur</button>
                                    <button data-filter=".cat--5">Primatani</button>
                                    <button data-filter=".cat--6">Purotani</button>
                                    <button data-filter=".cat--7">Top E-Commerce</button>
                                    <button data-filter=".cat--8">Indomaret</button>
                                    <button data-filter=".cat--9">Bibit Bunga</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filter -->


                    <div class="row"><!-- row product list -->
                        <div class="product__list another-product-style"><!-- product list -->

                            <!-- kat1 --><?php foreach ($products1 as $product) : ?><!-- Agromaret cabe merah 1 -->
                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga1'] ?><?= $product['harga2'] ?><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat1 --><?php endforeach; ?>





                            <!-- kat1 --><?php foreach ($products2 as $product) : ?><!-- Agromaret cabe merah 2 -->
                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga1'] ?><?= $product['harga2'] ?><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat1 --><?php endforeach; ?>





                            <!-- kat2 --><?php foreach ($products3 as $product) : ?><!-- Agromaret cabe ijo -->
                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga1'] ?><?= $product['harga2'] ?><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>





                            <!-- kat2 --><?php foreach ($products4 as $product) : ?><!-- bibit online -->
                            <div class="col-md-3 single__pro col-lg-3 cat--2 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga1'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>





                            <!-- kat1 --><?php foreach ($products5 as $product) : ?><!-- Sentratani -->
                            <div class="col-md-3 single__pro col-lg-3 cat--3 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <img style=" background-position: 100% 0; background-size: 50%; text-align: right;" src="<?= $product['logo'] ?>">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat1 --><?php endforeach; ?>





                            <!-- kat2 --><?php foreach ($products6 as $product) : ?><!-- Cari Sayur -->
                            <div class="col-md-3 single__pro col-lg-3 cat--4 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?> <?= $product['title1'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>





                            <!-- kat2 --><!-- <?php foreach ($products7 as $product) : ?> --><!-- Primatani -->
                            <!-- <div class="col-md-3 single__pro col-lg-3 cat--5 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- kat2 --><!-- <?php endforeach; ?> -->





                            <!-- kat2 --><?php foreach ($products8 as $product) : ?><!-- Purotani -->
                            <div class="col-md-3 single__pro col-lg-3 cat--6 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; height: 50px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>





                            <!-- kat2 --><?php foreach ($products9 as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--7 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>





                            <!-- kat2 --><?php foreach ($products10 as $product) : ?><!-- Indomaret -->
                            <div class="col-md-3 single__pro col-lg-3 cat--8 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://www.klikindomaret.com/<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://www.klikindomaret.com/<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="https://www.klikindomaret.com/Assets/image/logo.png"></li>
                                        </ul>
                                        <a target="_blank" href="https://www.klikindomaret.com/<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://www.klikindomaret.com/<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>





                            <!-- kat2 --><?php foreach ($products11 as $product) : ?><!-- bibit bunga -->
                            <div class="col-md-3 single__pro col-lg-3 cat--9 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                        </div><!-- product list -->
                    </div><!-- row product list -->

                </div><!-- product container -->
            </div><!-- container awal -->
        </section><!-- Section -->