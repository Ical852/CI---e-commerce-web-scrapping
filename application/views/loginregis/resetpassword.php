<section class="categories-slider-area bg__white">
<div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/images/bg/5.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="login__register__menu" role="tablist">
                            <li class="text-center" role="presentation"><a href="">Reset Password</a></li>
                        </ul>
                        <h5 class="text-center">Email : <?= $this->session->userdata('reset_email'); ?></h5><br>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <?= $this->session->flashdata('message'); ?>
                            
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                                <form class="login" method="post" action="<?= base_url('auth/changePassword'); ?> ">
                                    <input type="password" id="password1" name="password1" placeholder="Enter New Password" >
                                    <?= form_error('password1', '<small class="text-danger pl-3">','</small>' ); ?>

                                    <input type="password" id="password2" name="password2" placeholder="Confirm New Password" >
                                    <?= form_error('password2', '<small class="text-danger pl-3">','</small>' ); ?>

                                    <button type="submit" class="btn btn-primary
                                     btn-user btn-block">
                                      Reset Password
                                    </button>
                                </form>
                            </div><br>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div></section>