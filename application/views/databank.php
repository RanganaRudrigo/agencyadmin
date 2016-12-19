<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php $this->view('inc/header_top.php'); ?>
</head>
<body class="dark">
<div id="wrapper" class="clearfix">
    <!-- preloader -->


    <!-- Header -->
    <header id="header" class="header">
        <?php $this->view('inc/main_menu.php'); ?>
    </header>

    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
            <div class="container pt-90 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">Data Bank</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: News & Blog -->
        <section id="news">
            <div class="container pt-70 pb-40">
                <div class="section-content">
                    <div class="row">
                        <?php
                        foreach ($datas as $k => $row):
                        ?>

                        <div class="col-sm-6 col-md-3">
                            <article class="post clearfix mb-30 bg-lighter">

                                <div class="entry-content p-15 pt-10 pb-10">
                                    <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                        <div class="media-body pl-0">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="#"><?= $row->BankTitle ?></a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-5">
                                        <?= $row->ShortDescription; ?>
                                        <br/>
                                        <a class="text-theme-color-2 font-12 ml-5" href="<?= base_url('Contact-Us') ?>"> Contact</a></p>
                                </div>
                            </article>
                        </div>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#1f1f1f">
        <?php $this->view('inc/footer_main.php'); ?>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<?php $this->view('inc/footer_js.php'); ?>

</body>
</html>