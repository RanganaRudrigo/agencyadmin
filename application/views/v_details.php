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
                            <h3 class="title text-white"><?= $one_vacancy->VacancyTitle; ?>  </h3>
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



                        <div class="col-md-12">
                            <div class="posts-content-container">

                                <ul class="row" style="list-style: none;margin-right: 0%;">

                                    <li class="col-md-3">
                                        <div class="" style="border: #c0c0c0 solid 1px;border-radius: 3px;padding: 10px 12px;margin-bottom: 2%;">
                                            <p>
                                                <?= $one_vacancy->CountryTitle; ?>                                                                   <br>
                                                <img src="<?= UP.$one_vacancy->Image ?>" width="100" height="50">
                                            </p>
                                        </div>
                                    </li>


                                    <div class="clearfix"></div>
                                    <li class="col-md-3">
                                        <div class="" style="border: #c0c0c0 solid 1px;border-radius: 3px;padding: 10px 12px;margin-bottom: 2%;">
                                            <h5 style="color: #000000;">Salary</h5>

                                            <p> <?= $one_vacancy->Salary; ?></p>
                                        </div>
                                    </li>

                                    <li class="col-md-3">
                                        <div class="" style="border: #c0c0c0 solid 1px;border-radius: 3px;padding: 10px 12px;margin-bottom: 2%;">
                                            <h5 style="color: #000000;">Food</h5>

                                            <?php foreach ($foods as $food): $food = (object)$food; ?>
                                                <?= ($one_vacancy->Food == $food->index) ? $food->value : ""; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>

                                    <li class="col-md-3">
                                        <div class="" style="border: #c0c0c0 solid 1px;border-radius: 3px;padding: 10px 12px;margin-bottom: 2%;">
                                            <h5 style="color: #000000;">
                                                Accommodation</h5>

                                            <?php foreach ($accommodations as $accommodation): $accommodation = (object)$accommodation; ?>
                                                <?= ($one_vacancy->Accommodation == $accommodation->index) ? $accommodation->value : ""; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>

                                    <li class="col-md-3">
                                        <div class="" style="border: #c0c0c0 solid 1px;border-radius: 3px;padding: 10px 12px;margin-bottom: 2%;">
                                            <h5 style="color: #000000;">Medical</h5>

                                            <?php foreach ($medicals as $medical): $medical = (object)$medical; ?>
                                                <?= ($one_vacancy->Accommodation == $medical->index) ? $medical->value : ""; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>
                                    <div class="clearfix"></div>
                                    <li class="col-md-6">
                                        <div class="" style="border: #c0c0c0 solid 1px;border-radius: 3px;padding: 10px 12px;margin-bottom: 2%;">
                                            <h5 style="color: #000000;">Air
                                                Ticket</h5>

                                            <?php foreach ($airTickets as $airTicket): $airTicket = (object)$airTicket; ?>
                                                <?= ($one_vacancy->AirTicket == $medical->index) ? $medical->value : ""; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="" style="border: #c0c0c0 solid 1px;border-radius: 3px;padding: 10px 12px;margin-bottom: 2%;">
                                            <h5 style="color: #000000;">Contract
                                                Period</h5>

                                            <?php foreach ($contractYears as $contractYear): $contractYear = (object)$contractYear; ?>
                                                <?= ($one_vacancy->ContractYear == $medical->index) ? $medical->value : ""; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>
                                    <div class="clearfix"></div>
                                    <li class="col-md-12">
                                        <div class="" style="border: #c0c0c0 solid 1px;border-radius: 3px;padding: 10px 12px;margin-bottom: 2%;">
                                            <h5 style="color: #000000;">Description</h5>

                                            <p><?= $one_vacancy->Description; ?></p>
                                        </div>
                                    </li>


                                </ul>
                                <div style="">

                                    <a href="<?= base_url('Apply-Now/').url_title($one_vacancy->VacancyTitle).'/'.$one_vacancy->VacancyId ?>" class="btn btn-dark btn-circled btn-sm">Apply Now</a>
                                    <!--<a href="#" class="btn btn-default">Apply Now</a>-->
                                </div>

                            </div>
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