<div id="quickview-wrapper">
        

        <!-- Our Product -->
        <!-- Modal 1 -->
        <?php $no = 0;
        foreach ($cabe as $cb) : $no++; ?>

        <?php 
        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;
        ?>
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

                            <!-- input modal1 -->
                            <input class="hidden" type="date" name="txtDate" id="txtDate" value="<?php echo $today; ?>">
                            <input class="hidden" type="text" name="txtEmail" id="txtEmail" value="<?= $user['email']; ?>">
                            <input class="hidden" type="text" name="txtNama" id="txtNama" value="<?= $user['name']; ?>">
                            <input class="hidden" type="text" name="txtGambar<?php echo $cb->kode_cabe; ?>" id="txtGambar<?php echo $cb->kode_cabe; ?>" value="<?php echo $cb->img ?>">
                            <input class="hidden" type="text" name="txtNamaCabe<?php echo $cb->kode_cabe; ?>" id="txtNamaCabe<?php echo $cb->kode_cabe; ?>" value="<?php echo $cb->nama_cabe ?>">
                            <input class="hidden" type="text" name="txtHarga<?php echo $cb->kode_cabe; ?>" id="txtHarga<?php echo $cb->kode_cabe; ?>" value="<?php echo $cb->harga ?>">
                            <!-- input modal1 -->

                            <div class="product-info">
                                <div id="konfirmasi<?php echo $cb->kode_cabe; ?>"></div>
                                <h1><?php echo $cb->nama_cabe ?></h1>
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
                                    <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah<?php echo $cb->kode_cabe; ?>" id="txtJumlah<?php echo $cb->kode_cabe; ?>" value="1" max="<?php echo $cb->stok ?>" min="1"> </p>
                                </div>
                                <form class="login">
                                <input class="text-center" type="text"  id="txtAlamat<?php echo $cb->kode_cabe; ?>" name="txtAlamat<?php echo $cb->kode_cabe; ?>" placeholder="Masukkkan Alamat">
                                </form>
                                <div class="addtocart-btn">
                                    <a class="btn btn-primary" type="button"  name="btnSimpan<?php echo $cb->kode_cabe; ?>" id="btnSimpan<?php echo $cb->kode_cabe; ?>">Order</a>
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
        <?php 
        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;
        ?>
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

                            <!-- input modal2 -->
                            <input class="hidden" type="date" name="txtDate2" id="txtDate2" value="<?php echo $today; ?>">
                            <input class="hidden" type="text" name="txtEmail2" id="txtEmail2" value="<?= $user['email']; ?>">
                            <input class="hidden" type="text" name="txtNama2" id="txtNama2" value="<?= $user['name']; ?>">
                            <input class="hidden" type="text" name="txtGambar2<?php echo $cb2->kode_cabe; ?>" id="txtGambar2<?php echo $cb2->kode_cabe; ?>" value="<?php echo $cb2->img ?>">
                            <input class="hidden" type="text" name="txtNamaCabe2<?php echo $cb2->kode_cabe; ?>" id="txtNamaCabe2<?php echo $cb2->kode_cabe; ?>" value="<?php echo $cb2->nama_cabe ?>">
                            <input class="hidden" type="text" name="txtHarga2<?php echo $cb2->kode_cabe; ?>" id="txtHarga2<?php echo $cb2->kode_cabe; ?>" value="<?php echo $cb2->harga ?>">
                            <!-- input modal2 -->

                            <div class="product-info">
                                <div id="konfirmasi2<?php echo $cb2->kode_cabe; ?>"></div>
                                <h1><?php echo $cb2->nama_cabe ?></h1>
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
                                    <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah2<?php echo $cb2->kode_cabe; ?>" id="txtJumlah2<?php echo $cb2->kode_cabe; ?>" value="1" max="<?php echo $cb2->stok ?>" min="1"> </p>
                                </div>
                                <form class="login">
                                <input class="text-center" type="text"  id="txtAlamat2<?php echo $cb2->kode_cabe; ?>" name="txtAlamat2<?php echo $cb2->kode_cabe; ?>" placeholder="Masukkkan Alamat">
                                </form>
                                <div class="addtocart-btn">
                                    <a class="btn btn-primary" type="button"  name="btnSimpan2<?php echo $cb2->kode_cabe; ?>" id="btnSimpan2<?php echo $cb2->kode_cabe; ?>">Order</a>
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
        <?php 
        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;
        ?>
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

                            <!-- input modal3 -->
                            <input class="hidden" type="date" name="txtDate3" id="txtDate3" value="<?php echo $today; ?>">
                            <input class="hidden" type="text" name="txtEmail3" id="txtEmail3" value="<?= $user['email']; ?>">
                            <input class="hidden" type="text" name="txtNama3" id="txtNama3" value="<?= $user['name']; ?>">
                            <input class="hidden" type="text" name="txtGambar3<?php echo $cb3->kode_cabe; ?>" id="txtGambar3<?php echo $cb3->kode_cabe; ?>" value="<?php echo $cb3->img ?>">
                            <input class="hidden" type="text" name="txtNamaCabe3<?php echo $cb3->kode_cabe; ?>" id="txtNamaCabe3<?php echo $cb3->kode_cabe; ?>" value="<?php echo $cb3->nama_cabe ?>">
                            <input class="hidden" type="text" name="txtHarga3<?php echo $cb3->kode_cabe; ?>" id="txtHarga3<?php echo $cb3->kode_cabe; ?>" value="<?php echo $cb3->harga ?>">
                            <!-- input modal3 -->

                            <div class="product-info">
                                <div id="konfirmasi3<?php echo $cb3->kode_cabe; ?>"></div>
                                <h1><?php echo $cb3->nama_cabe ?></h1>
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
                                    <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah3<?php echo $cb3->kode_cabe; ?>" id="txtJumlah3<?php echo $cb3->kode_cabe; ?>" value="1" max="<?php echo $cb3->stok ?>" min="1"> </p>
                                </div>
                                <form class="login">
                                <input class="text-center" type="text"  id="txtAlamat3<?php echo $cb3->kode_cabe; ?>" name="txtAlamat3<?php echo $cb3->kode_cabe; ?>" placeholder="Masukkkan Alamat">
                                </form>
                                <div class="addtocart-btn">
                                    <a class="btn btn-primary" type="button"  name="btnSimpan3<?php echo $cb3->kode_cabe; ?>" id="btnSimpan3<?php echo $cb3->kode_cabe; ?>">Order</a>
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
        <?php 
        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;
        ?>
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

                            <!-- input modal4 -->
                            <input class="hidden" type="date" name="txtDate4" id="txtDate4" value="<?php echo $today; ?>">
                            <input class="hidden" type="text" name="txtEmail4" id="txtEmail4" value="<?= $user['email']; ?>">
                            <input class="hidden" type="text" name="txtNama4" id="txtNama4" value="<?= $user['name']; ?>">
                            <input class="hidden" type="text" name="txtGambar4<?php echo $cb4->kode_cabe; ?>" id="txtGambar4<?php echo $cb4->kode_cabe; ?>" value="<?php echo $cb4->img ?>">
                            <input class="hidden" type="text" name="txtNamaCabe4<?php echo $cb4->kode_cabe; ?>" id="txtNamaCabe4<?php echo $cb4->kode_cabe; ?>" value="<?php echo $cb4->nama_cabe ?>">
                            <input class="hidden" type="text" name="txtHarga4<?php echo $cb4->kode_cabe; ?>" id="txtHarga4<?php echo $cb4->kode_cabe; ?>" value="<?php echo $cb4->harga ?>">
                            <!-- input modal4 -->

                            <div class="product-info">
                                <div id="konfirmasi4<?php echo $cb4->kode_cabe; ?>"></div>
                                <h1><?php echo $cb4->nama_cabe ?></h1>
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
                                    <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah4<?php echo $cb4->kode_cabe; ?>" id="txtJumlah4<?php echo $cb4->kode_cabe; ?>" value="1" max="<?php echo $cb4->stok ?>" min="1"> </p>
                                </div>
                                <form class="login">
                                <input class="text-center" type="text"  id="txtAlamat4<?php echo $cb4->kode_cabe; ?>" name="txtAlamat4<?php echo $cb4->kode_cabe; ?>" placeholder="Masukkkan Alamat">
                                </form>
                                <div class="addtocart-btn">
                                    <a class="btn btn-primary" type="submit"  name="btnSimpan4<?php echo $cb4->kode_cabe; ?>" id="btnSimpan4<?php echo $cb4->kode_cabe; ?>">Order</a>
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

                        location.reload();
                        
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

                        location.reload();

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

                        location.reload();

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

                        location.reload();

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