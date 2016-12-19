<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php $this->view('inc/header_top.php'); ?>
    <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet"/>

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
                            <h3 class="title text-white">Vacancies</h3>
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

                            <table id="example" class="table table-hover" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Vacancy Title</th>
                                    <th>Country</th>
                                    <th>Salary</th>
                                    <th>Food</th>
                                    <th>Accommodation</th>
                                    <th>Medical</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Vacancy Title</th>
                                    <th>Country</th>
                                    <th>Salary</th>
                                    <th>Food</th>
                                    <th>Accommodation</th>
                                    <th>Medical</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($vacancies as $k => $vacancies_list): ?>
                                <tr>
                                    <td><?= $k+1 ?></td>
                                    <td><?= $vacancies_list->VacancyTitle; ?></td>
                                    <td>
                                        <?= $vacancies_list->CountryTitle; ?> <br/>
                                        <img src="<?= UP.$vacancies_list->Image ?>" width="55" height="25">
                                    </td>
                                    <td><?= $vacancies_list->Salary; ?></td>
                                    <td>
                                        <?php foreach ($foods as $food): $food = (object)$food; ?>
                                            <?= ($vacancies_list->Food == $food->index) ? $food->value : ""; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td>
                                        <?php foreach ($accommodations as $accommodation): $accommodation = (object)$accommodation; ?>
                                            <?= ($vacancies_list->Accommodation == $accommodation->index) ? $accommodation->value : ""; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td>
                                        <?php foreach ($medicals as $medical): $medical = (object)$medical; ?>
                                            <?= ($vacancies_list->Accommodation == $medical->index) ? $medical->value : ""; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><a href="<?= base_url('Vacancy-Details/').url_title($vacancies_list->VacancyTitle).'/'.$vacancies_list->VacancyId ?>" class="btn btn-dark btn-circled btn-sm"> Read More</a></td>
                                </tr>
                                <?php endforeach ?>

                                </tbody>
                            </table>
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

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

<?php $this->view('inc/footer_js.php'); ?>

</body>
</html>