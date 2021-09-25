<footer class="htc__foooter__area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="footer__container clearfix">
                         <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="ft__widget">
                                <div class="ft__logo">
                                    <a href="index.html">
                                        <img src="<?php echo base_url('assets/images/logo/Caricabee.png');?>" alt="footer logo">
                                    </a>
                                </div>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-pin"></i>
                                            </div>
                                            <div class="address-text">
                                                <p>194 Main Rd T, FS Rayed <br> VIC 3057, USA</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="address-text">
                                                <a href="#"> info@example.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-phone-in-talk"></i>
                                            </div>
                                            <div class="address-text">
                                                <p>+012 345 678 102 </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="social__icon">
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <?php 
                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');

                        $today = $year . '-' . $month . '-' . $day;
                        ?>

                        <div class="col-md-9 col-lg-9 col-sm-9 smt-30 xmt-30">
                            <div class="ft__widget" id="mydiv">
                                <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                <h2 class="ft__title">Buku Tamu</h2>
                                <div id="konfirmasibukutamu"></div>
                                    <div class="form-group">
                                        <label>Nama :</label>
                                        <input type="text" name="txtNameBukutamu" id="txtNameBukutamu" class="form-control" placeholder="Masukkan Nama...">
                                        <label>Kritik dan Saran :</label>
                                        <textarea rows="4" type="text" name="txtMessageBukutamu" id="txtMessageBukutamu" class="form-control" placeholder="Ketikkan Kritik dan Saran..."></textarea>
                                        <input class="hidden" type="date" name="txtDateBukutamu" id="txtDateBukutamu" value="<?= $today; ?>">
                                        <input class="hidden" type="text" name="txtEmailBukutamu" id="txtEmailBukutamu" value="<?= $user['email']; ?>">
                                        <br>
                                        <button class="btn btn-primary" name="btnBukuTamu" id="btnBukuTamu" type="button">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="ft__logo"><br>
                                    <a href="<?php echo base_url('user');?>">
                                        <img src="<?php echo base_url('assets/images/logo/Caricabee.png');?>" alt="footer logo">
                                    </a>
                                </div>
                                <div class="copyright">
                                    <p>© 2017 <a href="<?php echo base_url('user');?>">CariCabee.com</a>
                                    All Right Reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="<?php echo base_url('user');?>">Home</a></li>
                                    <li><a href="<?php echo base_url('shop');?>">Our Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
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
                                    <img alt="big images" src="images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>

<script>
$(document).ready(function() {

     $('#btnBukuTamu').click(function(){
            
        $.post( "<?php echo base_url(); ?>user/add1/", {
                type:1,
                txtNameBukutamu:$('#txtNameBukutamu').val(),
                txtMessageBukutamu:$('#txtMessageBukutamu').val(),
                txtDateBukutamu:$('#txtDateBukutamu').val(),
                txtEmailBukutamu:$('#txtEmailBukutamu').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasibukutamu').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasibukutamu').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasibukutamu').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasibukutamu').html('');
                        },2000);
                        
                        $('#txtNameBukutamu').val('');
                        $('#txtMessageBukutamu').val('');
                        
                    } else {
                        
                        $('#konfirmasibukutamu').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });


});
</script>

    <!-- jquery latest version -->
    <link rel="stylesheet" src="<?php echo base_url('assets/css/style.css');?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/slick.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/waypoints.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery.dataTables.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery.dataTables.bootstrap.min.js');?>"></script>
    <!--  <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery.dataTables.js');?>"></script> -->

</body>

</html>