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
                            <h3 class="title text-white">Foreign Principals</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section id="about">
            <div class="container">
                <div class="section-content">
                    <div class="row mt-50">

                        <div class="col-md-12 mt-20">
                            <div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">Best Services We Provided </span>
                                <h3 class="text-uppercase text-theme-colored font-weight-600 letter-space-2 mt-5">Whell Alignment</h3>
                                <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30 text-justify">
                        <div class="col-md-12">
                            <div class="heading-line-bottom">
                                <h4 class="heading-title">Upload Your Details</h4>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Vacancy Title</label>
                                        <input class="form-control" type="text" disabled>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Your Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Your Telephone</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Your E-mail</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Upload CV *</label>
                                        <input value="2000000" name="MAX_FILE_SIZE" type="hidden">
<!--                                        <input class="form-control" id="file" name="file" placeholder="CV" type="file">-->
                                        <input id="exampleInputFile2" type="file" name="file">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Register Now" class="btn btn-dark"/>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- Section: Features -->


    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#1f1f1f">
        <?php $this->view('inc/footer_main.php'); ?>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper -->

<?php //$this->view('inc/footer_js.php'); ?>

</body>
</html>