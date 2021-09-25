<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/profile.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">My Profile</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html" style="color: white;">Home</a>
                                  <span class="brd-separetor" style="color: white;">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">My Profile</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <div class="single-portfolio-area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="single-portfolio-img">
                            <img style="width: 750px; height: 750px;" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" >
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="portfolio-description mrg-sm">
                            <h2><?= $user['name']; ?></h2>
                            
                            <div class="portfolio-info">
                                <ul>
                                    <li><span>Email:</span><?= $user['email']; ?></li>

                                    <li><span>Role: </span><?= $role['role']; ?></li>

                                    <?php if($user['is_active'] == 1){?>
                                        <li><span>Status: </span>Active</li>
                                    <?php } else {?>
                                        <li><span>Status: </span>Nonactive</li>
                                    <?php } ?>


                                    <li><span>Account Created:</span><?= date('d F Y', $user['date_created']); ?></li>
                                </ul>
                            </div><br>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Edit Profile
                            </button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                              Ganti Gambar Profile
                            </button>

                            <a href="<?php echo site_url ('profile/changepassword') ?>"><button type="button" class="btn btn-primary">
                              Change Password
                            </button></a>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <form class="form-group">
                                    <div id="konfirmasi"></div>
                                  <div class="modal-body">
                                    <input class="hidden" type="text" name="txtId" id="txtId" value="<?= $user['id']; ?>">
                                    <label>Nama :</label>
                                    <input class="form-control" type="text" name="txtNama" id="txtNama" value="<?= $user['name']; ?>">
                                    <label>Email :</label>
                                    <input class="form-control" type="text" name="txtEmail" id="txtEmail" value="<?= $user['email']; ?>" readonly>
                                  </div>
                                  </form>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-white btn-info btn-bold" name="btnSimpan" id="btnSimpan"><i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                                    <button type="button" class="btn btn-white btn-default btn-round" data-dismiss="modal"><i class="fa fa-minus-circle"></i> Tutup</button>
                                  </div>
                                </div>
                              </div>
                            </div>



                            <!-- khusus gambar -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Pic</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <div class="modal-body">

                                    <?php echo form_open_multipart('profile/upload'); ?>
                                    <input class="hidden" type="text" name="email" id="email" value="<?= $user['email']; ?>" readonly>
                                    <label>Upload ur new pic :</label>
                                    <input type="file" name="image" id="image"><br>
                                    <p class="modal-title" id="exampleModalLabel">"Make Your Pic to `750x750` To Make It Looks Better"</p>
                                  </div>

                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-white btn-info btn-bold" name="btnSimpan2" id="btnSimpan2"><i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                                    <button type="button" class="btn btn-white btn-default btn-round" data-dismiss="modal"><i class="fa fa-minus-circle"></i> Tutup</button>
                                    <?php echo form_close(); ?>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- khusus gambar -->



                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>
$(document).ready(function() {
    $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>profile/add/", {
                type:1,
                txtNama:$('#txtNama').val(),
                txtId:$('#txtId').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="ok"){
                        $('#konfirmasi').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },2000);
                        
                        $('#txtNama').val('');
                        $('#txtId').val('');
                        
                    } else {
                        
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                      setInterval('location.reload()', 1000);  
                
            });
            
    });

});
</script>