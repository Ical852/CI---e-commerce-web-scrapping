<section class="categories-slider-area bg__white">
<div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/images/bg/5.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="login__register__menu" role="tablist">
                            <li role="presentation"><a href="<?= base_url('auth'); ?>">Login</a></li>
                            <li role="presentation"><a href="<?= base_url('auth/registration'); ?>">Register</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <?= $this->session->flashdata('message'); ?>
                            
                            <div id="register" role="tabpanel" class="single__tabs__panel">
                                <form class="login" method="post"  action="<?= base_url('auth/registration'); ?>">
                                    <input type="text"  id="name" name="name" placeholder="Full Name" value="<?= set_value('name') ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">','</small>' ); ?>

                                    <input type="text"  id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>' ); ?>

                                    <input type="password"  id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">','</small>' ); ?>

                                    <input type="password"  id="password2" name="password2" placeholder="Repeat Password">

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                     Register Account
                                    </button>
                                </form>
                            </div>
                            <!-- End Single Content -->

                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div></section>