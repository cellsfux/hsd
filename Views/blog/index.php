

    <div class="main">

        <!--page header section start-->
        <section class="" style="background: url('<?= URLROOT ?>assets/img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Blog </h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="<?= URLROOT ?>">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                      
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--blog section start-->
       <!--blog section start-->
       <section class="section section-lg ">
            <div class="container">
                <div class="row">

                  <?php foreach($blog as $article): ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img height="300" src="<?= $article->image ?>" class="card-img-top rounded-top" alt="<?= $article->title ?>">
                                <a href="#" class="position-absolute category-text small badge badge-secondary">Article</a>
                            </div>
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-between">
                                   
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span><?= $article->update_at ?></span>
                                    </div>
                                </div>
                                <h3 class="h5 card-title mt-3"><a href="<?= URLROOT ?>blog/read/<?= $article->_id ?>"><?= substr($article->title, 0, 50) ?></a></h3>
                                <p style="height: 100px;" class="card-text">Si vous voulez aprofondire sur cet article prière de continuer avec la lecture</p>
                                <a href="<?= URLROOT ?>blog/read/<?= $article->_id ?>" class="link-with-icon text-default font-small font-weight-bold" >
                                    Lire Plus <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                   
                  
                </div>
           <?php /* <div class="row justify-content-center">
                    <nav class="mt-4">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link border border-variant-soft rounded" href="#">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link border border-variant-soft rounded" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border border-variant-soft rounded" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border border-variant-soft rounded" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border border-variant-soft rounded" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> */ ?>
            </div>
        </section>
        <!--blog section end-->






    </div>
