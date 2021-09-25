<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/comment.css');?>">
<footer class="htc__foooter__area gray-bg" id="mydiv">
            <div class="container">
                <div class="row">
                    <div class="footer__container clearfix">
                         <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="ft__widget">
                                <div class="ft__logo">
                                    <a href="<?php echo base_url('user');?>">
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
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->

                        <div class="col-md-9 col-lg-9 col-sm-9 smt-30 xmt-30">
                            <div class="ft__widget" >
                                <div class="container d-flex justify-content-center">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="card">

                                                <?php foreach($komen as $km) : ?>
                                                <div class="comment-widgets m-b-20" style="border: solid black; border-width: 1px; margin-bottom: 2px; background-color: #E5E5E5;">
                                                    <div class="d-flex flex-row comment-row">
                                                        <div class="p-2">
                                                            <span class="round">
                                                                <img style="width: 50px; height: 50px;" src="<?php echo base_url().'/assets/img/profile/'.$km->gambar ;?>" alt="user">
                                                            </span>
                                                            <h5 style="display: inline-block;">
                                                                <strong>
                                                                    <?php echo $km->nama; ?>
                                                                </strong>
                                                            </h5>
                                                        </div>
                                                        <span class="label label-success">CariCabee</span>
                                                        <span class="action-icons">
                                                            <a href="#" data-abc="true">
                                                                <i class="fa fa-pencil"></i>
                                                            </a> 
                                                            <a href="#" data-abc="true">
                                                                <i class="fa fa-rotate-right"></i>
                                                            </a> 
                                                            <a href="#" data-abc="true">
                                                                <i class="fa fa-heart"></i>
                                                            </a> 
                                                        </span>
                                                        <hr style="margin: 10px; border: solid black; border-width: 1px;">
                                                        <div class="comment-text w-100">
                                                            <div class="comment-footer">
                                                                <span class="date">
                                                                    <strong><?php echo $km->tanggal; ?></strong>
                                                                </span>
                                                            </div>
                                                            <p class="m-b-5 m-t-10"><?php echo $km->komentar; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>

                                                <?= $this->pagination->create_links(); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');

                        $today = $year . '-' . $month . '-' . $day;
                        ?>

                        <div class="col-md-12 col-lg-12 col-sm-12 smt-30 xmt-30">
                            <div class="ft__widget">
                                <form name="f_kategori" id="f_kategori" action="" enctype="multipart/form-data">
                                <h2 class="ft__title">Komentar</h2>
                                <div id="konfirmasikomen"></div>
                                    <div class="form-group">
                                        <label>Nama :</label>
                                        <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Masukkan Nama...">
                                        <label>Komentar :</label>
                                        <textarea rows="4" type="text" name="txtMessage" id="txtMessage" class="form-control" placeholder="Ketikkan Komentar..."></textarea>
                                        <input class="hidden" type="date" name="txtDate" id="txtDate" value="<?= $today; ?>">
                                        <input class="hidden" type="text" name="txtEmail" id="txtEmail" value="<?= $user['email']; ?>">
                                        <input class="hidden" type="text" name="txtGambar" id="txtGambar" value="<?= $user['image']; ?>">
                                        <br>
                                        <button class="btn btn-primary" name="btnKomen" id="btnKomen" type="button">Kirim</button>
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

<script>
$(document).ready(function() {
$('a[href*="http://localhost/CISmartweb/user/index"]').each(function(){
  this.href += '#mydiv';
});
     $('#btnKomen').click(function(){
            
        $.post( "<?php echo base_url(); ?>user/add2/", {
                type:1,
                txtName:$('#txtName').val(),
                txtMessage:$('#txtMessage').val(),
                txtDate:$('#txtDate').val(),
                txtEmail:$('#txtEmail').val(),
                txtGambar:$('#txtGambar').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasikomen').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasikomen').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasikomen').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasikomen').html('');
                        },2000);
                        
                        $('#txtName').val('');
                        $('#txtMessage').val('');

                     location.reload();
                        
                    } else {
                        
                        $('#konfirmasikomen').html(
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