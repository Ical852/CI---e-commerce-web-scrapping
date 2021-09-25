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
        <!-- End Bradcaump area --> 
        <!-- Start Our Product Area -->
        <section class="htc__product__area shop__page ptb--50 bg__white">
            <div class="container">

                <?= $this->session->flashdata('message'); ?>

                <div class="container-fluid">

                <a href="<?php echo site_url ('shop/cari') ?>"><button class="btn btn-primary" style="width: 30%;">Cari Produk</button></a>
                <a style="float: right;" href="<?php echo site_url ('shopscrap') ?>"><button class="btn btn-info">Cek toko lain ></button></a>




                <!-- scrap ke database -->
                
                
                <h1><br><br><br>Scrap Cabe ke Database</h1>
                
                <?php echo form_open_multipart('shop/scrap'); ?>
                    <input type="text" name="url" id="url" class="form-control" placeholder="Masukkan Link" required=""><br>
                    <button class="btn btn-primary" type="submit">Scrap ke Database</button>
                <?php echo form_close(); ?>

                </div><br><br><br>

                <!-- scrap ke database -->








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
                                    <button data-filter=".cat--5">Cabe Scrap</button>
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
                                        <h2><a href="<?php echo base_url('shop/detailproduk/'.$cb->kode_cabe);?>"><?php echo $cb->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli1<?php echo $cb->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shop/detailproduk/'.$cb->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
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
                                        <h2><a href="<?php echo base_url('shop/detailproduk/'.$cb2->kode_cabe);?>"><?php echo $cb2->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb2->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb2->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli2<?php echo $cb2->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shop/detailproduk/'.$cb2->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
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
                                        <h2><a href="<?php echo base_url('shop/detailproduk/'.$cb3->kode_cabe);?>"><?php echo $cb3->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb3->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb3->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli3<?php echo $cb3->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shop/detailproduk/'.$cb3->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
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
                                        <h2><a href="<?php echo base_url('shop/detailproduk/'.$cb4->kode_cabe);?>"><?php echo $cb4->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb4->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb4->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli4<?php echo $cb4->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shop/detailproduk/'.$cb4->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                            <!-- foreach cabe lain -->






                            <!-- foreach cabe scrap database -->
                            <?php foreach ($cabescrap as $cb5) : ?>
                            <div class="col-md-3 single__pro col-lg-3 cat--5 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="<?= $cb5->link; ?>"><img style="width: 300px; height: 200px;" src="<?= $cb5->img; ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="<?= $cb5->link; ?>"><?= $cb5->title; ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $cb5->harga1; ?><?= $cb5->harga2; ?><?= $cb5->harga; ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $cb5->logo; ?>"></li>
                                        </ul>
                                        <a target="_blank" href="<?= $cb5->link; ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="<?= $cb5->link; ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- foreach cabe scrap database -->

                            
                            <!-- End Data dari database -->

                        </div>
                    </div>

                    <!-- modal kat 1 -->
                    <?php $no = 0;
                     foreach ($cabe as $cb) : $no++; ?>

                    <?php 
                    $month = date('m');
                    $day = date('d');
                    $year = date('Y');

                    $today = $year . '-' . $month . '-' . $day;
                    ?>

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
                                    <div id="konfirmasi<?php echo $cb->kode_cabe; ?>"></div>
                                    <div class="pro__thumb">

                                        <input class="hidden" type="date" name="txtDate" id="txtDate" value="<?php echo $today; ?>">
                                        <input class="hidden" type="text" name="txtEmail" id="txtEmail" value="<?= $user['email']; ?>">
                                        <input class="hidden" type="text" name="txtNama" id="txtNama" value="<?= $user['name']; ?>">

                                        <img src="<?php echo base_url().'/upload/'.$cb->img ;?>" alt="product images"><hr>
                                        <input class="hidden" type="text" name="txtGambar<?php echo $cb->kode_cabe; ?>" id="txtGambar<?php echo $cb->kode_cabe; ?>" value="<?php echo $cb->img ?>">

                                        <h2><strong><?php echo $cb->nama_cabe ?></strong></h2>
                                        <input class="hidden" type="text" name="txtNamaCabe<?php echo $cb->kode_cabe; ?>" id="txtNamaCabe<?php echo $cb->kode_cabe; ?>" value="<?php echo $cb->nama_cabe ?>">                                        

                                        <ul class="pro__dtl__prize">
                                            <li class="new__price">Rp. <?php echo number_format($cb->harga,0,',','.') ?></li>
                                            <input class="hidden" type="text" name="txtHarga<?php echo $cb->kode_cabe; ?>" id="txtHarga<?php echo $cb->kode_cabe; ?>" value="<?php echo $cb->harga ?>">
                                        </ul>

                                        <h5>Stok Tersedia : <?php echo $cb->stok ?></h5><br>

                                        <p>Jumlah :
                                        <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah<?php echo $cb->kode_cabe; ?>" id="txtJumlah<?php echo $cb->kode_cabe; ?>" value="1" max="<?php echo $cb->stok ?>" min="1"> </p>

                                        <form class="login">
                                        <input type="text"  id="txtAlamat<?php echo $cb->kode_cabe; ?>" name="txtAlamat<?php echo $cb->kode_cabe; ?>" placeholder="Masukkkan Alamat Pengiriman">
                                        </form>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="submit"  name="btnSimpan<?php echo $cb->kode_cabe; ?>" id="btnSimpan<?php echo $cb->kode_cabe; ?>">Tambah</button>
                                        </div>

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

                    <?php 
                    $month = date('m');
                    $day = date('d');
                    $year = date('Y');

                    $today = $year . '-' . $month . '-' . $day;
                    ?>

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
                                    <div id="konfirmasi2<?php echo $cb2->kode_cabe; ?>"></div>
                                    <div class="pro__thumb">

                                        <input class="hidden" type="date" name="txtDate2" id="txtDate2" value="<?php echo $today; ?>">
                                        <input class="hidden" type="text" name="txtEmail2" id="txtEmail2" value="<?= $user['email']; ?>">
                                        <input class="hidden" type="text" name="txtNama2" id="txtNama2" value="<?= $user['name']; ?>">

                                        <img src="<?php echo base_url().'/upload/'.$cb2->img ;?>" alt="product images"><hr>
                                        <input class="hidden" type="text" name="txtGambar2<?php echo $cb2->kode_cabe; ?>" id="txtGambar2<?php echo $cb2->kode_cabe; ?>" value="<?php echo $cb2->img ?>">

                                        <h2><strong><?php echo $cb2->nama_cabe ?></strong></h2>
                                        <input class="hidden" type="text" name="txtNamaCabe2<?php echo $cb2->kode_cabe; ?>" id="txtNamaCabe2<?php echo $cb2->kode_cabe; ?>" value="<?php echo $cb2->nama_cabe ?>">                                        

                                        <ul class="pro__dtl__prize">
                                            <li class="new__price">Rp. <?php echo number_format($cb2->harga,0,',','.') ?></li>
                                            <input class="hidden" type="text" name="txtHarga2<?php echo $cb2->kode_cabe; ?>" id="txtHarga2<?php echo $cb2->kode_cabe; ?>" value="<?php echo $cb2->harga ?>">
                                        </ul>

                                        <h5>Stok Tersedia : <?php echo $cb2->stok ?></h5><br>

                                        <p>Jumlah :
                                        <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah2<?php echo $cb2->kode_cabe; ?>" id="txtJumlah2<?php echo $cb2->kode_cabe; ?>" value="1" max="<?php echo $cb2->stok ?>" min="1"> </p>

                                        <form class="login">
                                        <input type="text"  id="txtAlamat2<?php echo $cb2->kode_cabe; ?>" name="txtAlamat2<?php echo $cb2->kode_cabe; ?>" placeholder="Masukkkan Alamat Pengiriman">
                                        </form>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="submit"  name="btnSimpan2<?php echo $cb2->kode_cabe; ?>" id="btnSimpan2<?php echo $cb2->kode_cabe; ?>">Tambah</button>
                                        </div>

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

                    <?php 
                    $month = date('m');
                    $day = date('d');
                    $year = date('Y');

                    $today = $year . '-' . $month . '-' . $day;
                    ?>

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
                                    <div id="konfirmasi3<?php echo $cb3->kode_cabe; ?>"></div>
                                    <div class="pro__thumb">

                                        <input class="hidden" type="date" name="txtDate3" id="txtDate3" value="<?php echo $today; ?>">
                                        <input class="hidden" type="text" name="txtEmail3" id="txtEmail3" value="<?= $user['email']; ?>">
                                        <input class="hidden" type="text" name="txtNama3" id="txtNama3" value="<?= $user['name']; ?>">

                                        <img src="<?php echo base_url().'/upload/'.$cb3->img ;?>" alt="product images"><hr>
                                        <input class="hidden" type="text" name="txtGambar3<?php echo $cb3->kode_cabe; ?>" id="txtGambar3<?php echo $cb3->kode_cabe; ?>" value="<?php echo $cb3->img ?>">

                                        <h2><strong><?php echo $cb3->nama_cabe ?></strong></h2>
                                        <input class="hidden" type="text" name="txtNamaCabe3<?php echo $cb3->kode_cabe; ?>" id="txtNamaCabe3<?php echo $cb3->kode_cabe; ?>" value="<?php echo $cb3->nama_cabe ?>">                                        

                                        <ul class="pro__dtl__prize">
                                            <li class="new__price">Rp. <?php echo number_format($cb3->harga,0,',','.') ?></li>
                                            <input class="hidden" type="text" name="txtHarga3<?php echo $cb3->kode_cabe; ?>" id="txtHarga3<?php echo $cb3->kode_cabe; ?>" value="<?php echo $cb3->harga ?>">
                                        </ul>

                                        <h5>Stok Tersedia : <?php echo $cb3->stok ?></h5><br>

                                        <p>Jumlah :
                                        <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah3<?php echo $cb3->kode_cabe; ?>" id="txtJumlah3<?php echo $cb3->kode_cabe; ?>" value="1" max="<?php echo $cb3->stok ?>" min="1"> </p>

                                        <form class="login">
                                        <input type="text"  id="txtAlamat3<?php echo $cb3->kode_cabe; ?>" name="txtAlamat3<?php echo $cb3->kode_cabe; ?>" placeholder="Masukkkan Alamat Pengiriman">
                                        </form>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="submit"  name="btnSimpan3<?php echo $cb3->kode_cabe; ?>" id="btnSimpan3<?php echo $cb3->kode_cabe; ?>">Tambah</button>
                                        </div>

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

                    <?php 
                    $month = date('m');
                    $day = date('d');
                    $year = date('Y');

                    $today = $year . '-' . $month . '-' . $day;
                    ?>

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
                                    <div id="konfirmasi4<?php echo $cb4->kode_cabe; ?>"></div>
                                    <div class="pro__thumb">

                                        <input class="hidden" type="date" name="txtDate4" id="txtDate4" value="<?php echo $today; ?>">
                                        <input class="hidden" type="text" name="txtEmail4" id="txtEmail4" value="<?= $user['email']; ?>">
                                        <input class="hidden" type="text" name="txtNama4" id="txtNama4" value="<?= $user['name']; ?>">

                                        <img src="<?php echo base_url().'/upload/'.$cb4->img ;?>" alt="product images"><hr>
                                        <input class="hidden" type="text" name="txtGambar4<?php echo $cb4->kode_cabe; ?>" id="txtGambar4<?php echo $cb4->kode_cabe; ?>" value="<?php echo $cb4->img ?>">

                                        <h2><strong><?php echo $cb4->nama_cabe ?></strong></h2>
                                        <input class="hidden" type="text" name="txtNamaCabe4<?php echo $cb4->kode_cabe; ?>" id="txtNamaCabe4<?php echo $cb4->kode_cabe; ?>" value="<?php echo $cb4->nama_cabe ?>">                                        

                                        <ul class="pro__dtl__prize">
                                            <li class="new__price">Rp. <?php echo number_format($cb4->harga,0,',','.') ?></li>
                                            <input class="hidden" type="text" name="txtHarga4<?php echo $cb4->kode_cabe; ?>" id="txtHarga4<?php echo $cb4->kode_cabe; ?>" value="<?php echo $cb4->harga ?>">
                                        </ul>

                                        <h5>Stok Tersedia : <?php echo $cb4->stok ?></h5><br>

                                        <p>Jumlah :
                                        <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah4<?php echo $cb4->kode_cabe; ?>" id="txtJumlah4<?php echo $cb4->kode_cabe; ?>" value="1" max="<?php echo $cb4->stok ?>" min="1"> </p>

                                        <form class="login">
                                        <input type="text"  id="txtAlamat4<?php echo $cb4->kode_cabe; ?>" name="txtAlamat4<?php echo $cb4->kode_cabe; ?>" placeholder="Masukkkan Alamat Pengiriman">
                                        </form>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="submit"  name="btnSimpan4<?php echo $cb4->kode_cabe; ?>" id="btnSimpan4<?php echo $cb4->kode_cabe; ?>">Tambah</button>
                                        </div>

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

<!-- btn kat 1 -->
<?php $no = 0;
foreach ($cabe as $cb) : $no++; ?>

<script>
$(document).ready(function() {
    $('#btnSimpan<?php echo $cb->kode_cabe; ?>').click(function(){
            
        $.post( "<?php echo base_url(); ?>shop/add1/", {
                type:1,
                txtDate:$('#txtDate').val(),
                txtEmail:$('#txtEmail').val(),
                txtNama:$('#txtNama').val(),
                txtGambar:$('#txtGambar<?php echo $cb->kode_cabe; ?>').val(),
                txtNamaCabe:$('#txtNamaCabe<?php echo $cb->kode_cabe; ?>').val(),
                txtHarga:$('#txtHarga<?php echo $cb->kode_cabe; ?>').val(),
                txtJumlah:$('#txtJumlah<?php echo $cb->kode_cabe; ?>').val(),
                txtAlamat:$('#txtAlamat<?php echo $cb->kode_cabe; ?>').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasi<?php echo $cb->kode_cabe; ?>').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasi<?php echo $cb->kode_cabe; ?>').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasi<?php echo $cb->kode_cabe; ?>').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi<?php echo $cb->kode_cabe; ?>').html('');
                        },2000);
                        
                        $('#txtGambar<?php echo $cb->kode_cabe; ?>').val('');
                        $('#txtNamaCabe<?php echo $cb->kode_cabe; ?>').val('');
                        $('#txtHarga<?php echo $cb->kode_cabe; ?>').val('');
                        $('#txtJumlah<?php echo $cb->kode_cabe; ?>').val('');
                        $('#txtAlamat<?php echo $cb->kode_cabe; ?>').val('');

                        setInterval('location.reload()', 2000);

                    } else {
                        
                        $('#konfirmasi<?php echo $cb->kode_cabe; ?>').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });


});
</script>

<?php endforeach; ?>
<!-- btn kat 1 -->


<!-- btn kat 2 -->
<?php $no = 0;
foreach ($cabe2 as $cb2) : $no++; ?>

<script>
$(document).ready(function() {
    $('#btnSimpan2<?php echo $cb2->kode_cabe; ?>').click(function(){
            
        $.post( "<?php echo base_url(); ?>shop/add2/", {
                type:1,
                txtDate2:$('#txtDate2').val(),
                txtEmail2:$('#txtEmail2').val(),
                txtNama2:$('#txtNama2').val(),
                txtGambar2:$('#txtGambar2<?php echo $cb2->kode_cabe; ?>').val(),
                txtNamaCabe2:$('#txtNamaCabe2<?php echo $cb2->kode_cabe; ?>').val(),
                txtHarga2:$('#txtHarga2<?php echo $cb2->kode_cabe; ?>').val(),
                txtJumlah2:$('#txtJumlah2<?php echo $cb2->kode_cabe; ?>').val(),
                txtAlamat2:$('#txtAlamat2<?php echo $cb2->kode_cabe; ?>').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasi2<?php echo $cb2->kode_cabe; ?>').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasi2<?php echo $cb2->kode_cabe; ?>').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasi2<?php echo $cb2->kode_cabe; ?>').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi2<?php echo $cb2->kode_cabe; ?>').html('');
                        },2000);
                        
                        $('#txtGambar2<?php echo $cb2->kode_cabe; ?>').val('');
                        $('#txtNamaCabe2<?php echo $cb2->kode_cabe; ?>').val('');
                        $('#txtHarga2<?php echo $cb2->kode_cabe; ?>').val('');
                        $('#txtJumlah2<?php echo $cb2->kode_cabe; ?>').val('');
                        $('#txtAlamat2<?php echo $cb2->kode_cabe; ?>').val('');

                        setInterval('location.reload()', 2000);

                    } else {
                        
                        $('#konfirmasi2<?php echo $cb2->kode_cabe; ?>').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });


});
</script>

<?php endforeach; ?>
<!-- btn kat 2 -->

<!-- btn kat 3 -->
<?php $no = 0;
foreach ($cabe3 as $cb3) : $no++; ?>

<script>
$(document).ready(function() {
    $('#btnSimpan3<?php echo $cb3->kode_cabe; ?>').click(function(){
            
        $.post( "<?php echo base_url(); ?>shop/add3/", {
                type:1,
                txtDate3:$('#txtDate3').val(),
                txtEmail3:$('#txtEmail3').val(),
                txtNama3:$('#txtNama3').val(),
                txtGambar3:$('#txtGambar3<?php echo $cb3->kode_cabe; ?>').val(),
                txtNamaCabe3:$('#txtNamaCabe3<?php echo $cb3->kode_cabe; ?>').val(),
                txtHarga3:$('#txtHarga3<?php echo $cb3->kode_cabe; ?>').val(),
                txtJumlah3:$('#txtJumlah3<?php echo $cb3->kode_cabe; ?>').val(),
                txtAlamat3:$('#txtAlamat3<?php echo $cb3->kode_cabe; ?>').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasi3<?php echo $cb3->kode_cabe; ?>').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasi3<?php echo $cb3->kode_cabe; ?>').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasi3<?php echo $cb3->kode_cabe; ?>').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi3<?php echo $cb3->kode_cabe; ?>').html('');
                        },2000);
                        
                        $('#txtGambar3<?php echo $cb3->kode_cabe; ?>').val('');
                        $('#txtNamaCabe3<?php echo $cb3->kode_cabe; ?>').val('');
                        $('#txtHarga3<?php echo $cb3->kode_cabe; ?>').val('');
                        $('#txtJumlah3<?php echo $cb3->kode_cabe; ?>').val('');
                        $('#txtAlamat3<?php echo $cb3->kode_cabe; ?>').val('');

                        setInterval('location.reload()', 2000);

                    } else {
                        
                        $('#konfirmasi3<?php echo $cb3->kode_cabe; ?>').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });


});
</script>

<?php endforeach; ?>
<!-- btn kat 3 -->

<!-- btn kat 4 -->
<?php $no = 0;
foreach ($cabe4 as $cb4) : $no++; ?>

<script>
$(document).ready(function() {
    $('#btnSimpan4<?php echo $cb4->kode_cabe; ?>').click(function(){
            
        $.post( "<?php echo base_url(); ?>shop/add4/", {
                type:1,
                txtDate4:$('#txtDate4').val(),
                txtEmail4:$('#txtEmail4').val(),
                txtNama4:$('#txtNama4').val(),
                txtGambar4:$('#txtGambar4<?php echo $cb4->kode_cabe; ?>').val(),
                txtNamaCabe4:$('#txtNamaCabe4<?php echo $cb4->kode_cabe; ?>').val(),
                txtHarga4:$('#txtHarga4<?php echo $cb4->kode_cabe; ?>').val(),
                txtJumlah4:$('#txtJumlah4<?php echo $cb4->kode_cabe; ?>').val(),
                txtAlamat4:$('#txtAlamat4<?php echo $cb4->kode_cabe; ?>').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasi4<?php echo $cb4->kode_cabe; ?>').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasi4<?php echo $cb4->kode_cabe; ?>').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasi4<?php echo $cb4->kode_cabe; ?>').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi4<?php echo $cb4->kode_cabe; ?>').html('');
                        },2000);
                        
                        $('#txtGambar4<?php echo $cb4->kode_cabe; ?>').val('');
                        $('#txtNamaCabe4<?php echo $cb4->kode_cabe; ?>').val('');
                        $('#txtHarga4<?php echo $cb4->kode_cabe; ?>').val('');
                        $('#txtJumlah4<?php echo $cb4->kode_cabe; ?>').val('');
                        $('#txtAlamat4<?php echo $cb4->kode_cabe; ?>').val('');

                        setInterval('location.reload()', 2000);

                    } else {
                        
                        $('#konfirmasi4<?php echo $cb4->kode_cabe; ?>').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });


});
</script>

<?php endforeach; ?>
<!-- btn kat 4 -->