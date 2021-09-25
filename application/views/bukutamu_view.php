<style>
            .card1{
                border-radius: 13px;
                background: #fff;
                box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
                transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
                padding: 14px 80px 18px 36px;
            }
            /* border-radius: 13px;
    background: #fff;
    box-shadow: 0 6px 12px 2px rgb(0 0 0 / 31%), 0 0 6px rgb(0 0 0 / 32%);
    transition: .3s transform cubic-bezier(0.68, -0.55, 0.27, 1.55),.3s box-shadow,.3s -webkit-transform cubic-bezier(0.4, 0, 0.2, 1);
    padding: 14px 80px 18px 36px;
                */

             .card1:hover{
                transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
            }"
</style>

        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/cabean.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">Buku Tamu</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html" style="color: white;">Home</a>
                                  <span class="brd-separetor" style="color: white;">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">Buku Tamu</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        
        <!-- Start Product Details -->
        <section class="htc__product__details pt--120 pb--100 bg__white">
            <div class="container">                        
                <h1><strong> Silakan Isi Buku Tamu </strong></h1><br>
                
                <div class="row">

                    <?php 
                    $month = date('m');
                    $day = date('d');
                    $year = date('Y');

                    $today = $year . '-' . $month . '-' . $day;
                    ?>

                    <input class="hidden" type="date" name="txtDate" id="txtDate" value="<?php echo $today; ?>">
                    <input class="hidden" type="text" name="txtEmail" id="txtEmail" value="<?= $user['email']; ?>">

                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        <div class="card" style="padding-left:7%; padding-top:2%; padding-bottom:2%;">  
                        <div class="card1 text-white bg-success mb-3" style="max-width: 100rem; ">
                            
                            <div class="card-header" > <b>Buku Tamu</b></div><hr>
                            <div id="konfirmasi"></div>

                                <div class="card-body">
                                <form style="margin-top:3%;">
                                    <div class="form-group row" >
                                        <label for="nama" class="col-sm-2 col-form-label" style="padding-left:36px;">Nama</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" type="text" name="txtNama" id="txtNama" style="width:80%;"> 
                                            </div>
                                    </div>
                                     <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" style="padding-left:36px;">Kritik dan Saran</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="txtKritikSaran" id="txtKritikSaran" rows="5" style="width:80%;"></textarea>
                                                     </div>
                                                </div>
                                    </div>
                                         <button class="btn btn-primary" type="button"  id="btnSimpan">Kirim</button>
                                </form>
                                </div>
                        </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

<script>
$(document).ready(function() {
    $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>bukutamu/add/", {
                type:1,
                txtDate:$('#txtDate').val(),
                txtEmail:$('#txtEmail').val(),
                txtNama:$('#txtNama').val(),
                txtKritikSaran:$('#txtKritikSaran').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="repeat"){ 
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },3000);
                               
                    } else if (obj.msg[0]=="ok"){
                        $('#konfirmasi').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },2000);
                        
                        $('#txtNama').val('');
                        $('#txtKritikSaran').val('');
                        
                    } else {
                        
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                
            });
            
    });


});
</script>