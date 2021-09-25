<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/profile.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">Change Password</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?php echo site_url ('profile') ?>" style="color: white;">Profile</a>
                                  <span class="brd-separetor" style="color: white;">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">Change Password</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <div class="single-portfolio-area bg__white ptb--80">
            <div class="container">
                <h2><strong>Isi Password Terkini Terlebih Dahulu</strong></h2><br>
                <div class="row">
                    <div class="col-lg-6">
                    
                    <?= $this->session->flashdata('message'); ?>

                        <form action="<?= base_url('profile/changepassword'); ?>" method="post">
                              <div class="form-group">
                                <label for="current_password">Password Saat Ini :</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                <?= form_error('current_password', '<small class="text-danger pl-3">','</small>' ); ?>
                              </div>
                              <div class="form-group">
                                <label for="new_password1">Password Baru :</label>
                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                <?= form_error('new_password1', '<small class="text-danger pl-3">','</small>' ); ?>
                              </div>
                              <div class="form-group">
                                <label for="new_password2">Konfirmasi Password Baru :</label>
                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                <?= form_error('new_password2', '<small class="text-danger pl-3">','</small>' ); ?>
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                              </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>