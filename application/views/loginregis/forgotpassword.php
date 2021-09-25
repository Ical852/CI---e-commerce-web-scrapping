<section class="categories-slider-area bg__white">
<div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/images/bg/5.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="login__register__menu" role="tablist">
                            <li role="presentation"><a href="<?= base_url('auth'); ?>">Login</a></li>
                            <li role="presentation"><a href="<?= base_url('auth/registration'); ?>">Register</a></li><br>
                        </ul>
                        <h5 class="text-center"><strong>Forgot Your Password?</strong></h5><br>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <?= $this->session->flashdata('message'); ?>
                            
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                                <form class="login" method="post" action="<?= base_url('auth/forgotpassword'); ?> ">
                                    <input type="text" id="email" name="email" placeholder="Enter Email Address" value="<?= set_value('email'); ?>"><br><br>
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>' ); ?>

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