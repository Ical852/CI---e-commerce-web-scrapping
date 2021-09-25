        <!-- End Bradcaump area -->
        <a href="javascript:history.back()"><button class="btn btn-primary">Back</button></a>
        <div class="single-portfolio-area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="single-portfolio-img">
                            <img style="width: 750px; height: 750px;" src="<?= base_url('assets/img/profile/') . $detail['image']; ?>" >
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="portfolio-description mrg-sm">
                            <h2><?= $detail['name']; ?></h2>
                            
                            <div class="portfolio-info">
                                <ul>

                                    <?php
                                    $role_id = $detail['role_id']; 
                                    $query = "SELECT * FROM user_role WHERE id = '$role_id'";
                                    $role = $this->db->query($query)->row_array(); 
                                    ?>

                                    <li><span>Email:</span><?= $detail['email']; ?></li>

                                    <li><span>Role: </span><?= $role['role']; ?></li>

                                    <?php if($detail['is_active'] == 1){?>
                                        <li><span>Status: </span>Active</li>
                                    <?php } else {?>
                                        <li><span>Status: </span>Nonactive</li>
                                    <?php } ?>


                                    <li><span>Account Created:</span><?= date('d F Y', $detail['date_created']); ?></li>
                                </ul>
                            </div><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>