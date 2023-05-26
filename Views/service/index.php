

    <div class="main">

        <!--page header section start-->
        <section class="" style="background: url('<?= URLROOT ?>assets/img/h/2.jpeg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Nos services</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="<?= URLROOT ?>">Home</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--about section start-->
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-12 col-lg-5">
                        <h2><?= strtoupper(str_replace('Sarl', '', WEB_NAME)) ?> votre partenaire fiable pour votre reussite.</h2>
                        <p class="lead"><?= $company->slogan ?></p>
                    
                    </div>
                    <div class="col-12 col-lg-6 ml-lg-auto">
                        <img src="<?= URLROOT ?>/assets/img/h/2.jpeg"/>
                    </div>
                </div>
            </div>
        </section>
        <!--about section end-->

        <!--work-process section start-->
        <section class="section section-lg bg-soft ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Comment ça marche ?</h2>
                            <p class="lead">
                                Nous vous expliquont avec les details clés, pour signer un partenariat avec <strong><?= WEB_NAME ?></strong>  envie d'obtenir un bon resultat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="feature-widget text-center p-4">
                            <div class="p-3 p-md-4 rounded bg-primary text-white icon icon-shape icon-lg mb-4">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="widget-text">
                                <h3 class="h5">Entrer en cotact</h3>
                                <p class="mb-0">La première de chose à faire est de contacter et/ou entrer en contact avec <?= WEB_NAME ?>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="feature-widget text-center p-4">
                            <div class="p-3 p-md-4 rounded bg-secondary text-white icon icon-shape icon-lg mb-4">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="widget-text">
                                <h3 class="h5">Etudes de macrher</h3>
                                <p class="mb-0">Notre équipe va entrer en examen sur base des vos exigences et vous fournir les solutions des 
                                    qualité dans un bref delais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="feature-widget text-center p-4">
                            <div class="p-3 p-md-4 rounded bg-default text-white icon icon-shape icon-lg mb-4">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="widget-text">
                                <h3 class="h5">Signature du contract</h3>
                                <p class="mb-0">Après toutes les étapes nous pourrions proceder à la signature du contact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--work-process section end-->

        <!--cta section start-->
        <section class="section section-lg text-white bg-gradient-primary">
            <video class="fit-cover w-100 h-100 position-absolute z--1" src="http://corporx.themetags.com/corporate.mp4" autoplay="true" type="video/mp4" muted="" loop="true"></video>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 col-md-10 col-lg-9">
                        <div class="section-title text-center mb-5">
                            <h2>Cherchez-vous un partenaire fiable en RDC? </h2>
                            <p class="lead">Avec notre exprerience dans les domaines que nous traitons nous vous assurons de trouver un bon resultat.  <br/>
                                <?= WEB_NAME ?>, Votre partenaire fiable.
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <!--cta section end-->

  

     

        <!--blog section start-->
        <section class="section section-lg ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Nous fournissons des services de qualité</h2>
                            <p class="lead">Voici les domaines que nous travaillons avec performance.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($sevices as $service):?>

                    
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="<?= $service->image ?>" class="card-img-top rounded-top" alt="themetags office">
                                <a href="#" class="position-absolute category-text small badge badge-secondary">services</a>
                            </div>
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-between">
                                    
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span><?= $service->created_at ?></span>
                                    </div>
                                </div>
                                <h3 class="h5 card-title mt-3"><a href="<?= URLROOT ?>services/details/<?= $service->_id  ?>"><?= $service->title ?></a></h3>
                                <p class="card-text">
                                    Si vous voulez en savoir plus sur <?= $service->title ?> nous vous prions de bien vouloir appuyer. 
                                </p>
                                <a href="<?= URLROOT ?>services/details/<?= $service->_id  ?>" class="link-with-icon text-default font-small font-weight-bold" >Lire plus <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                   
                </div>
            </div>
        </section>
        <!--blog section end-->

        <!--cta section start-->
        <section class="section section-sm bg-soft">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center">
                        <div class="subscribe-content">
                            <span class="modal-icon icon icon-lg text-primary d-none d-md-block d-lg-block"><i class="fas fa-envelope-open-text"></i></span>
                            <h2 class="h4 modal-title my-2">Rejoigner  nos  3,45,441 Abonnés</h2>
                            <p class="mb-4">Obtenez un accès exclusif à des cadeaux,   des actualités..</p>
                        </div>
                        <div class="form-group">
                            <div class="d-sm-flex flex-column flex-sm-row mb-3 justify-content-center">
                                <input type="text" id="inputYourMail" placeholder="Reseigner votre email..." class="mr-sm-1 mb-2 mb-sm-0 form-control form-control-lg">
                                <button type="submit" class="ml-sm-1 btn btn-secondary">S'abonner</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta section end-->


    </div>

