<br><div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/cabean.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">Search Product</h2>
                                <nav class="bradcaump-inner">
                                  <a  style="color: white;" class="breadcrumb-item" href="index.html">Home</a>
                                  <span style="color: white;" class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">Search Product</span>
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

                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    
                <a href="<?php echo site_url ('shopuser') ?>"><button class="btn btn-info">< Shop Page</button></a>
                <a style="float: right;" href="<?php echo site_url ('shopscrapuser') ?>"><button class="btn btn-info">Cek toko lain ></button></a>
                <h1 style="text-align: center;">Cari</h1><br>

                <div class="containter" style="text-align: center;">

                <?php echo form_open('shopuser/cari');?>
                  <div class="form-group">
                    <input type="text" class="form-control center-block" style="width: 50%" id="cari" name="cari" placeholder="Cari Produk">
                  </div>
                  <button type="submit" class="btn btn-primary form-control" style="width: 50%" id="btnCari" name="btnCari">Cari</button>
                <?php echo form_close();?>

                </div>
                <!-- search bar -->


                    <div class="row">
                        <div class="product__list another-product-style">
                            <!-- dari database -->


                            <!-- foreach cabe merah -->
                            <?php foreach ($produk as $cb) : ?>

                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <img src="<?php echo base_url().'/upload/'.$cb->img ;?>" alt="product images">
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="<?php echo base_url('shopuser/detailproduk/'.$cb->kode_cabe) ?>" target="_blank"><?php echo $cb->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli1<?php echo $cb->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <a href="<?php echo base_url('shopuser/detailproduk/'.$cb->kode_cabe);?>" target="_blank"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>




                            <!-- modal kat 1 -->
                            <?php $no = 0;
                             foreach ($produk as $cb) : $no++; ?>

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


                </div>
            </div>
        </section>

