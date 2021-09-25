<div id="quickview-wrapper">
        

        <!-- Our Product -->
        <!-- Modal 1 -->
        <?php $no = 0;
        foreach ($cabe as $cb) : $no++; ?>
        <div class="modal fade" id="productModal1<?php echo $cb->kode_cabe; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="<?php echo base_url().'/upload/'.$cb->img ;?>">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1><strong><?php echo $cb->nama_cabe ?></strong></h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">Rp. <?php echo number_format($cb->harga,0,',','.') ?></span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    <?php echo $cb->nama_cabe ?> adalah cabe hasil panen dari hidroponik rumahan yang 100% asli dan halal, cocok untuk yang ingin mencoba-coba rasa cabai <?php echo $cb->nama_cabe ?> ini, biji dari cabai <?php echo $cb->nama_cabe ?> ini dapat digunakan untuk menanam cabai sendiri dirumah. tunggu apalagi ayo buruan beli!.
                                </div>
                                <div class="quick-desc">
                                    <h5>Stok Tersedia : <?php echo $cb->stok ?></h5><br>
                                    <p>Jumlah :
                                    <input class="cart-plus-minus-box" type="number" class="text-center" value="1" max="<?php echo $cb->stok ?>" min="1"> </p>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="<?php echo site_url ('auth') ?>">Order</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <?php endforeach; ?>
        <!-- END Modal 1 -->



        <!-- Modal 2 -->
        <?php $no = 0;
        foreach ($cabe2 as $cb2) : $no++; ?>
        <div class="modal fade" id="productModal2<?php echo $cb2->kode_cabe; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="<?php echo base_url().'/upload/'.$cb2->img ;?>">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1><strong><?php echo $cb2->nama_cabe ?></strong></h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">Rp. <?php echo number_format($cb2->harga,0,',','.') ?></span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    <?php echo $cb2->nama_cabe ?> adalah cabe hasil panen dari hidroponik rumahan yang 100% asli dan halal, cocok untuk yang ingin mencoba-coba rasa <?php echo $cb2->nama_cabe ?> ini, biji dari cabai <?php echo $cb2->nama_cabe ?> ini dapat digunakan untuk menanam cabai sendiri dirumah. tunggu apalagi ayo buruan beli!.
                                </div>
                                <div class="quick-desc">
                                    <h5>Stok Tersedia : <?php echo $cb2->stok ?></h5><br>
                                    <p>Jumlah :
                                    <input class="cart-plus-minus-box" type="number" class="text-center" value="1" max="<?php echo $cb2->stok ?>" min="1"> </p>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="<?php echo site_url ('auth') ?>">Order</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <?php endforeach; ?>
        <!-- END Modal 2 -->



        <!-- Modal 3 -->
        <?php $no = 0;
        foreach ($cabe3 as $cb3) : $no++; ?>
        <div class="modal fade" id="productModal3<?php echo $cb3->kode_cabe; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="<?php echo base_url().'/upload/'.$cb3->img ;?>">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1><strong><?php echo $cb3->nama_cabe ?></strong></h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">Rp. <?php echo number_format($cb3->harga,0,',','.') ?></span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    <?php echo $cb3->nama_cabe ?> adalah cabe hasil panen dari hidroponik rumahan yang 100% asli dan halal, cocok untuk yang ingin mencoba-coba rasa <?php echo $cb3->nama_cabe ?> ini, biji dari cabai <?php echo $cb3->nama_cabe ?> ini dapat digunakan untuk menanam cabai sendiri dirumah. tunggu apalagi ayo buruan beli!.
                                </div>
                                <div class="quick-desc">
                                    <h5>Stok Tersedia : <?php echo $cb3->stok ?></h5><br>
                                    <p>Jumlah :
                                    <input class="cart-plus-minus-box" type="number" class="text-center" value="1" max="<?php echo $cb3->stok ?>" min="1"> </p>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="<?php echo site_url ('auth') ?>">Order</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <?php endforeach; ?>
        <!-- END Modal 3 -->



        <!-- Modal 4 -->
        <?php $no = 0;
        foreach ($cabe4 as $cb4) : $no++; ?>
        <div class="modal fade" id="productModal4<?php echo $cb4->kode_cabe; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="<?php echo base_url().'/upload/'.$cb4->img ;?>">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1><strong><?php echo $cb4->nama_cabe ?></strong></h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">Rp. <?php echo number_format($cb4->harga,0,',','.') ?></span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    <?php echo $cb4->nama_cabe ?> adalah cabe hasil panen dari hidroponik rumahan yang 100% asli dan halal, cocok untuk yang ingin mencoba-coba rasa <?php echo $cb4->nama_cabe ?> ini, biji dari cabai <?php echo $cb4->nama_cabe ?> ini dapat digunakan untuk menanam cabai sendiri dirumah. tunggu apalagi ayo buruan beli!.
                                </div>
                                <div class="quick-desc">
                                    <h5>Stok Tersedia : <?php echo $cb4->stok ?></h5><br>
                                    <p>Jumlah :
                                    <input class="cart-plus-minus-box" type="number" class="text-center" value="1" max="<?php echo $cb4->stok ?>" min="1"> </p>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="<?php echo site_url ('auth') ?>">Order</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <?php endforeach; ?>
        <!-- END Modal 4 -->
        <!-- Our Product -->

    </div>