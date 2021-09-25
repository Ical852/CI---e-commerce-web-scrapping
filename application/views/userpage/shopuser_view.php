<br><div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/cabean.jpg');?>) no-repeat scroll center center / cover ;">
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
        <!-- End Bradcaump area --> 
        <!-- Start Our Product Area -->
        <section class="htc__product__area shop__page ptb--50 bg__white">
            <div class="container">

                <div class="container-fluid">

                <a href="<?php echo site_url ('shopuser/cari') ?>"><button class="btn btn-primary" style="width: 30%;">Cari Produk</button></a>
                <a style="float: right;" href="<?php echo site_url ('shopscrapuser') ?>"><button class="btn btn-info">Cek toko lain ></button></a>

                </div><br>

                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu">
                                    <button data-filter="*"  class="is-checked">All</button>
                                    <button data-filter=".cat--1">Cabe Merah</button>
                                    <button data-filter=".cat--2">Cabe Ijo</button>
                                    <button data-filter=".cat--3">Cabe Pedes</button>
                                    <button data-filter=".cat--4">Cabe Lainnya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    <div class="row">
                        <div class="product__list another-product-style">
                            <!-- dari database -->


                            <!-- foreach cabe merah -->
                            <?php foreach ($cabe as $cb) : ?>

                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <img src="<?php echo base_url().'/upload/'.$cb->img ;?>" alt="product images">
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="<?php echo('shopuser/detailproduk/'.$cb->kode_cabe) ?>"><?php echo $cb->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli1<?php echo $cb->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shopuser/detailproduk/'.$cb->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                            <!-- foreach cabe merah -->

                            <!-- foreach cabe ijo -->
                            <?php foreach ($cabe2 as $cb2) : ?>
                            
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <img src="<?php echo base_url().'/upload/'.$cb2->img ;?>" alt="product images">
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="<?php echo('shopuser/detailproduk/'.$cb2->kode_cabe) ?>"><?php echo $cb2->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb2->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb2->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli2<?php echo $cb2->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shopuser/detailproduk/'.$cb2->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                            <!-- foreach cabe ijo -->

                            <!-- foreach cabe pedes -->
                            <?php foreach ($cabe3 as $cb3) : ?>
                            
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <img src="<?php echo base_url().'/upload/'.$cb3->img ;?>" alt="product images">
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="<?php echo('shopuser/detailproduk/'.$cb3->kode_cabe) ?>"><?php echo $cb3->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb3->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb3->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli3<?php echo $cb3->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shopuser/detailproduk/'.$cb3->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                            <!-- foreach cabe pedes -->

                            <!-- foreach cabe lain -->
                            <?php foreach ($cabe4 as $cb4) : ?>
                            
                            <div class="col-md-3 single__pro col-lg-3 hidden-sm col-xs-12 cat--4">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <img src="<?php echo base_url().'/upload/'.$cb4->img ;?>" alt="product images">
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="<?php echo('shopuser/detailproduk/'.$cb4->kode_cabe) ?>"><?php echo $cb4->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb4->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb4->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli4<?php echo $cb4->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shopuser/detailproduk/'.$cb4->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                            <!-- foreach cabe lain -->

                            
                            <!-- End Data dari database -->

                        </div>
                    </div>

                    <!-- modal kat 1 -->
                    <?php $no = 0;
                     foreach ($cabe as $cb) : $no++; ?>

                            <div class="modal fade" id="modalbeli1<?php echo $cb->kode_cabe; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Ke Keranjang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <div class="modal-body">
                                    <div class="pro__thumb">

                                        <img src="<?php echo base_url().'/upload/'.$cb->img ;?>" alt="product images"><hr>

                                        <h2><strong><?php echo $cb->nama_cabe ?></strong></h2>

                                        <ul class="pro__dtl__prize">
                                            <li class="new__price">Rp. <?php echo number_format($cb->harga,0,',','.') ?></li>
                                        </ul>

                                        <h5>Stok Tersedia : <?php echo $cb->stok ?></h5><br>

                                        <p>Jumlah :
                                        <input class="cart-plus-minus-box" type="number" class="text-center" value="1" max="<?php echo $cb->stok ?>" min="1"> </p>

                                        <form class="login">
                                        <input type="text"  placeholder="Masukkkan Alamat Pengiriman">
                                        </form><br>

                                        <ul class="pro__dtl__btn" >
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="<?php echo site_url ('auth') ?>"><button class="btn btn-primary">Tambah</button></a>
                                        </ul>

                                    </div>
                                  </div>

                                  
                                </div>
                              </div>
                            </div>

                    <?php endforeach; ?>
                    <!-- modal kat 1 -->

                    <!-- modal kat 2 -->
                    <?php $no = 0;
                     foreach ($cabe2 as $cb2) : $no++; ?>

                            <div class="modal fade" id="modalbeli2<?php echo $cb2->kode_cabe; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Ke Keranjang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <div class="modal-body">
                                    <div class="pro__thumb">

                                        <img src="<?php echo base_url().'/upload/'.$cb2->img ;?>" alt="product images"><hr>

                                        <h2><strong><?php echo $cb2->nama_cabe ?></strong></h2>

                                        <ul class="pro__dtl__prize">
                                            <li class="new__price">Rp. <?php echo number_format($cb2->harga,0,',','.') ?></li>
                                        </ul>

                                        <h5>Stok Tersedia : <?php echo $cb2->stok ?></h5><br>

                                        <p>Jumlah :
                                        <input class="cart-plus-minus-box" type="number" class="text-center" value="1" max="<?php echo $cb2->stok ?>" min="1"> </p>

                                        <form class="login">
                                        <input type="text" placeholder="Masukkkan Alamat Pengiriman">
                                        </form><br>

                                        <ul class="pro__dtl__btn">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="<?php echo site_url ('auth') ?>"><button class="btn btn-primary">Tambah</button></a>
                                        </ul>

                                    </div>
                                  </div>

                                  
                                </div>
                              </div>
                            </div>

                    <?php endforeach; ?>
                    <!-- modal kat 2 -->

                    <!-- modal kat 3 -->
                    <?php $no = 0;
                     foreach ($cabe3 as $cb3) : $no++; ?>

                            <div class="modal fade" id="modalbeli3<?php echo $cb3->kode_cabe; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Ke Keranjang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <div class="modal-body">
                                    <div class="pro__thumb">

                                        <img src="<?php echo base_url().'/upload/'.$cb3->img ;?>" alt="product images"><hr>

                                        <h2><strong><?php echo $cb3->nama_cabe ?></strong></h2>

                                        <ul class="pro__dtl__prize">
                                            <li class="new__price">Rp. <?php echo number_format($cb3->harga,0,',','.') ?></li>
                                        </ul>

                                        <h5>Stok Tersedia : <?php echo $cb3->stok ?></h5><br>

                                        <p>Jumlah :
                                        <input class="cart-plus-minus-box" type="number" class="text-center" value="1" max="<?php echo $cb3->stok ?>" min="1"> </p>

                                        <form class="login">
                                        <input type="text" placeholder="Masukkkan Alamat Pengiriman">
                                        </form><br>

                                        <ul class="pro__dtl__btn">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="<?php echo site_url ('auth') ?>"><button class="btn btn-primary">Tambah</button></a>
                                        </ul>

                                    </div>
                                  </div>

                                  
                                </div>
                              </div>
                            </div>

                    <?php endforeach; ?>
                    <!-- modal kat 3 -->

                    <!-- modal kat 4 -->
                    <?php $no = 0;
                     foreach ($cabe4 as $cb4) : $no++; ?>

                            <div class="modal fade" id="modalbeli4<?php echo $cb4->kode_cabe; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Ke Keranjang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <div class="modal-body">
                                    <div class="pro__thumb">


                                        <img src="<?php echo base_url().'/upload/'.$cb4->img ;?>" alt="product images"><hr>

                                        <h2><strong><?php echo $cb4->nama_cabe ?></strong></h2>

                                        <ul class="pro__dtl__prize">
                                            <li class="new__price">Rp. <?php echo number_format($cb4->harga,0,',','.') ?></li>
                                        </ul>

                                        <h5>Stok Tersedia : <?php echo $cb4->stok ?></h5><br>

                                        <p>Jumlah :
                                        <input class="cart-plus-minus-box" type="number" class="text-center" value="1" max="<?php echo $cb4->stok ?>" min="1"> </p>

                                        <form class="login">
                                        <input type="text" placeholder="Masukkkan Alamat Pengiriman">
                                        </form><br>

                                        <ul class="pro__dtl__btn">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                                        <a href="<?php echo site_url ('auth') ?>"><button class="btn btn-primary">Tambah</button></a>
                                        </ul>

                                    </div>
                                  </div>

                                  
                                </div>
                              </div>
                            </div>

                    <?php endforeach; ?>
                    <!-- modal kat 4 -->
                    
                    <!-- Start Load More BTn -->
                    <div class="row mt--60">
                        <div class="col-md-12">
                            <div class="htc__loadmore__btn">
                                <a href="#">load more</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Load More BTn -->
                </div>
            </div>
        </section>