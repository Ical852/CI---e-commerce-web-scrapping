<section class="categories-slider-area bg__white"><br>
    <div class="table-content table-responsive">
            <div class="container-fluid">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 float-right-style">
                        <div class="categories-menu mrg-xs">
                            <div class="category-heading">
                               <h3> Menu</h3>
                            </div>
                            <div class="category-menu-list">
                                <ul>
                                    <?php
                                    $role_id = $this->session->userdata('role_id');
                                    $queryMenu = "SELECT `user_menu`.`id`, `menu`, `url`,`icon`,`is_active`
                                    FROM `user_menu` JOIN `user_access_menu`
                                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                    WHERE `user_access_menu`.`role_id` = $role_id AND `user_menu`.`is_active` = 1
                                    ORDER BY `user_menu`.`menu` ASC
                                    ";
                                    $menu = $this->db->query($queryMenu)->result_array();
                                    ?>

                                    <?php foreach($menu as $m) : ?>

                                    <li>
                                        <a href="<?= base_url($m['url']); ?>">
                                            <span class="<?= $m['icon']; ?>"> <?= $m['menu'] ?></span>
                                        </a>
                                    </li>

                                    <?php endforeach; ?>


                                    
                                    <?php
                                    $role_id = $this->session->userdata('role_id');
                                    $queryMenu3 = "SELECT `user_menu3`.`id`, `menu`, `url`,`icon`,`is_active`
                                    FROM `user_menu3` JOIN `user_access_menu3`
                                    ON `user_menu3`.`id` = `user_access_menu3`.`menu_id`
                                    WHERE `user_access_menu3`.`role_id` = $role_id AND `user_menu3`.`is_active` = 1
                                    ORDER BY `user_access_menu3`.`menu_id` ASC
                                    ";
                                    $menu3 = $this->db->query($queryMenu3)->result_array();
                                    ?>

                                    <?php foreach($menu3 as $m3) : ?>

                                    <li>
                                        <a href="<?= base_url($m3['url']); ?>">
                                            <span class="<?= $m3['icon']; ?>"> <?= $m3['menu'] ?></span>
                                        </a>
                                    </li>

                                    <?php endforeach; ?>

                                    <li data-target="#modalaja" data-toggle="modal">
                                        <a href="#">
                                            <span class="ti-shift-right" > Logout</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>               