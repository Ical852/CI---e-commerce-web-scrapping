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
                                        <input type="text" name="txtNamaBukutamu" id="txtNamaBukutamu" class="form-control" placeholder="Masukkan Nama...">
                                        <label>Kritik dan Saran :</label>
                                        <textarea rows="4" type="text" name="txtKritikSaranBukutamu" id="txtKritikSaranBukutamu" class="form-control" placeholder="Ketikkan Kritik dan Saran..."></textarea>
                                        <input class="hidden" type="date" name="txtDateBukutamu" id="txtDateBukutamu" value="<?= $today; ?>">
                                        <input class="hidden" type="text" name="txtEmailBukutamu" id="txtEmailBukutamu" value="non login">
                                        <br>
                                        <button class="btn btn-primary" name="btnBukutamu" id="btnBukutamu" type="button">Kirim</button>
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
                                    <a href="<?php echo base_url('userpage');?>">
                                        <img src="<?php echo base_url('assets/images/logo/Caricabee.png');?>" alt="footer logo">
                                    </a>
                                </div>
                                <div class="copyright">
                                    <p>© 2017 <a href="<?php echo base_url('userpage');?>">CariCabee.com</a>
                                    All Right Reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="<?php echo base_url('userpage');?>">Home</a></li>
                                    <li><a href="<?php echo base_url('shopuser');?>">Product</a></li>
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

<script>
$(document).ready(function() {

     $('#btnBukutamu').click(function(){
            
        $.post( "<?php echo base_url(); ?>userpage/add/", {
                type:1,
                txtNamaBukutamu:$('#txtNamaBukutamu').val(),
                txtKritikSaranBukutamu:$('#txtKritikSaranBukutamu').val(),
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
                        
                        $('#txtNamaBukutamu').val('');
                        $('#txtKritikSaranBukutamu').val('');
                        
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