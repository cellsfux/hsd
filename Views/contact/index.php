<div class="main">

        <!--page header section start-->
        <section class="" style="background: url('<?= URLROOT ?>assets/img/slider-img-4.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Contact US</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="<?= URLROOT ?>">Home</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Contact US</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--promo section start-->
        <section class="section section-lg pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class=" fas fa-phone"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Appeler</h5>
                                    <p class="text-muted mb-0"> <?= $company->number_watsapp ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="fas fa-location-pin"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Visiter</h5>
                                    <p class="text-muted mb-0"><?= $company->ville ?>, <?= $company->adress ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Mail Us</h5>
                                    <p class="text-muted mb-0"><?= $company->email ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--contact us section start-->
        <section class="section section-lg">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="contact-us-form bg-soft rounded p-5">
                            <h4><?= WEB_NAME ?></h4>
                            <form action="#" method="POST" id="contactForm" class="contact-us-form mt-4">
                                <div class="form-row">
                                <img src="<?= URLROOT ?>assets/img/h/2.jpeg"/>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-us-content">
                            <h2><?= WEB_NAME ?></h2>
                            <p class="lead"><?=$company->slogan ?></p>

                            <a href="#" class="btn btn-outline-secondary align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                            <hr class="my-5">

                            <h5>Nos adresse</h5>
                            <address>
                                <?= $company->pays ?> <br>
                               <?= $company->ville?> </br>
                               <?= $company->adress ?>
                            </address>
                            <br>
                            <span>Phone: <?= $company->number_watsapp ?></span> <br>
                            <span>Email: <a href="mailto:<?= $company->email ?>" class="link-color"><?= $company->email ?></a></span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

        <!--contact map section start-->
        <div class="section py-0">
            <div class="google-map mb-n2 opacity-9 w-100">
                <?= $company->maps_location ?>
            </div>
        </div>
        <!--contact map section end-->


    </div>
