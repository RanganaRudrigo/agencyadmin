<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>

                <li class="has_sub">
                    <a href="<?= base_url('admin') ?>" class="waves-effect">
                        <i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect">
                        <i class="ion ion-clipboard"></i>
                        <span> Country </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/country/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/country/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/country/rearrange') ?>"><span>Country Re-arrange</span></a></li>
                    </ul>
                </li>
                <li class="has_sub" style="">
                    <a href="#" class="waves-effect">
                        <i class="ion ion-android-book"></i>
                        <span> Vacancy </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/vacancy/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/vacancy/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/vacancy/rearrange') ?>"><span>Vacancy Re-arrange</span></a>
                        </li>
                    </ul>
                </li>

                <li class="has_sub" style="display: ">
                    <a href="#" class="waves-effect">
                        <i class="fa fa-anchor"></i>
                        <span> Data Bank </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/databank/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/databank/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/databank/rearrange') ?>"><span>Data Bank Re-arrange</span></a></li>
                    </ul>
                </li>





                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="ion ion-clipboard"></i>
                        <span> Brand </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/brand/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/brand/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/brand/rearrange') ?>"><span>Category Re-arrange</span></a></li>
                    </ul>
                </li>
                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="ion ion-android-book"></i>
                        <span> Category </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/category/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/category/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/category/rearrange') ?>"><span>Category Re-arrange</span></a>
                        </li>
                    </ul>
                </li>


                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="fa fa-anchor"></i>
                        <span> Project </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/project/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/project/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/project/rearrange') ?>"><span>Product Re-arrange</span></a>
                        </li>
                    </ul>
                </li>

                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="fa fa-file"></i>
                        <span> Latest News </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/news/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/news/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/news/rearrange') ?>"><span>News Re-arrange</span></a></li>
                    </ul>
                </li>

                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="ion ion-clipboard"></i>
                        <span> Events </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/events/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/events/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/events/rearrange') ?>"><span>Events Re-arrange</span></a></li>
                    </ul>
                </li>

                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="ion ion-android-add-contact"></i>
                        <span> Sri Lanka News </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/slnews/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/slnews/') ?>"><span>Manage</span></a></li>
                        <li>
                            <a href="<?= base_url('admin/slnews/rearrange') ?>"><span>Sri Lanka News Re-arrange</span></a>
                        </li>
                    </ul>
                </li>

                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="ion ion-bag"></i>
                        <span> Blog </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/blog/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/blog/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/blog/rearrange') ?>"><span>Blog Re-arrange</span></a></li>
                    </ul>
                </li>
                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="ion fa-wpforms"></i>
                        <span> Sponsorship </span> <span
                            class="menu-arrow"></span>
                    </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/sponsorship/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/sponsorship/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/sponsorship/rearrange') ?>"><span>Sponsorship Re-arrange</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="fa fa-image"></i>
                        <span> Image Gallery </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/gallery/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/gallery/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/gallery/rearrange') ?>"><span>Gallery Re-arrange</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has_sub" style="display: none">
                    <a href="#" class="waves-effect">
                        <i class="fa fa-video-camera"></i>
                        <span> Video Gallery </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/video/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/video/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/video/rearrange') ?>"><span>Gallery Re-arrange</span></a></li>
                    </ul>
                </li>
                <!--                <li class="has_sub">-->
                <!--                    <a href="#" class="waves-effect">-->
                <!--                        <i class="fa fa-image"></i>-->
                <!--                        <span> Gallery </span> <span-->
                <!--                            class="menu-arrow"></span> </a>-->
                <!--                    <ul style="">-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/gallery/create') ?><!--"><span>Create</span></a></li>-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/gallery/') ?><!--"><span>Manage</span></a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!--                <li class="has_sub">-->
                <!--                    <a href="#" class="waves-effect">-->
                <!--                        <i class="fa fa-image"></i>-->
                <!--                        <span> Show </span> <span-->
                <!--                            class="menu-arrow"></span> </a>-->
                <!--                    <ul style="">-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/show/create') ?><!--"><span>Create</span></a></li>-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/show/') ?><!--"><span>Manage</span></a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!--                <li class="has_sub">-->
                <!--                    <a href="#" class="waves-effect">-->
                <!--                        <i class="fa fa-paw "></i>-->
                <!--                        <span> Winner Dogs </span> <span-->
                <!--                            class="menu-arrow"></span> </a>-->
                <!--                    <ul style="">-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/winner/create') ?><!--"><span>Create</span></a></li>-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/winner/') ?><!--"><span>Manage</span></a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!--                <li class="has_sub">-->
                <!--                    <a href="#" class="waves-effect">-->
                <!--                        <i class=" fa fa-paw "></i>-->
                <!--                        <span> Breeder </span> <span-->
                <!--                            class="menu-arrow"></span> </a>-->
                <!--                    <ul style="">-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/breeder/create') ?><!--"><span>Create</span></a></li>-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/breeder/') ?><!--"><span>Manage</span></a></li>-->
                <!--                        <li><a href="-->
                <? //= base_url('admin/sellers') ?><!--"><span> Breed Sellers </span></a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <li class="has_sub">
                    <a href="#" class="waves-effect">
                        <i class=" ion-images "></i>
                        <span> Slider </span> <span
                            class="menu-arrow"></span> </a>
                    <ul style="">
                        <li><a href="<?= base_url('admin/slider/create') ?>"><span>Create</span></a></li>
                        <li><a href="<?= base_url('admin/slider/') ?>"><span>Manage</span></a></li>
                        <li><a href="<?= base_url('admin/slider/rearrange') ?>"><span>Slider Re-arrange</span></a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!--- Sidemenu -->
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->