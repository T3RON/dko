<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?=base_url('')?>/assets/img/logo/logo.png" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5><?= $this->session->userdata('first_name'); ?> <?= $this->session->userdata('last_name'); ?></h5>
                <a href="<?= site_url('Auth/logout'); ?>" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="<?= site_url('Auth/logout'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                    <!-- text-->
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li>
                    <a class="waves-effect waves-dark" href="<?=base_url('admin/Index')?>" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Dashbord </span></a></li>
                <li class="nav-devider"></li>
                <li>
                    <a class="waves-effect waves-dark" href="<?=base_url('admin/Cities')?>" aria-expanded="false">
                        <i class="mdi mdi-city"></i><span class="hide-menu">City</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?=base_url('admin/Hostels')?>" aria-expanded="false">
                        <i class="mdi mdi-hotel"></i><span class="hide-menu">Hostels</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?=base_url('admin/Books')?>" aria-expanded="false">
                        <i class="mdi mdi-bookmark-plus"></i><span class="hide-menu">Books</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?=base_url('admin/Simcard')?>" aria-expanded="false">
                        <i class="mdi mdi-bookmark-plus"></i><span class="hide-menu">Simcard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?=base_url('admin/Attraction')?>" aria-expanded="false">
                        <i class="mdi mdi-attachment"></i><span class="hide-menu">Attraction</span></a>

                </li>
<!--                <li> <a class="has-arrow waves-effect waves-dark" href="--><?//=base_url('admin/Menu')?><!--" aria-expanded="false">-->
<!--                        <i class="mdi mdi-table"></i><span class="hide-menu">Menu & Submenu</span></a>-->
<!--                    <ul aria-expanded="false" class="collapse">-->
<!--                        <li><a href="--><?//=base_url('admin/Menu')?><!--">Menu</a></li>-->
<!--                        <li><a href="--><?//=base_url('admin/Submenu')?><!--">Submenu</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
                <li> <a class="has-arrow waves-effect waves-dark" href="<?=base_url('admin/Users')?>" aria-expanded="false">
                        <i class="mdi mdi-nature-people"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url('Auth/')?>">Panel</a></li>
                        <li><a href="<?=base_url('admin/Site')?>">Site</a></li>
                    </ul>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?=base_url('admin/Sliders')?>" aria-expanded="false">
                        <i class="mdi mdi-book-multiple"></i><span class="hide-menu">Sliders</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?=base_url('admin/Gallery')?>" aria-expanded="false">
                        <i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Gallery </span></a>

                </li>
                <li> <a class="waves-effect waves-dark" href="<?=base_url('admin/Reviews')?>" aria-expanded="false">
                        <i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Reviews </span></a>

                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>