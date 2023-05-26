<div class="main">

<!--page header section start-->
<section class="" style="background: url('<?= $sevice->image ?>')no-repeat center center / cover">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>Services </h1>
                        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                            <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                <li class="breadcrumb-item"><a href="<?= URLROOT ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= URLROOT ?>services">Services</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="#"><?= $sevice->title ?></a></li>
                              
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg ">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-8 col-md-8 order-0 order-sm-0 order-md-1 order-lg-1 mb-4 mb-md-0 mb-lg-0">
                        <!-- Post-->
                        <div class="post">
                            <div class="post-preview"><img src="<?= $sevice->image ?>" alt="<?= $sevice->title ?>" class="img-fluid" /></div>
                            <div class="post-wrapper">
                                <div class="post-header mt-4">
                                    <h1 class="post-title h3"><?= $sevice->title ?></h1>
                                    <ul class="post-meta list-unstyled d-flex list-inline">
                                        <li class="mr-4 font-small font-weight-bold"><?= $sevice->created_at ?></li>
                                        <?php /*<li class="mr-4 font-small font-weight-bold">In <a href="#">Branding</a>, <a href="#">Design</a></li>
                                        <li class="mr-4 font-small font-weight-bold"><a href="#">3 Comments</a></li> */ ?>
                                    </ul>
                                </div>
                                <div class="post-content">
                                     <?= $sevice->description ?>
                                </div>
                        </div>
                    
                </div>
            </div>
        </section>
        <!--blog section end-->


</div>