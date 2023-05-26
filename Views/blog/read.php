<div class="main">

<!--page header section start-->
<section class="" style="background: url('<?= $blog->image ?>')no-repeat center center / cover">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>Blog </h1>
                        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                            <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                <li class="breadcrumb-item"><a href="<?= URLROOT ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= URLROOT ?>blog">Blog</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="#"><?= $blog->title ?></a></li>
                              
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
                            <div class="post-preview"><img src="<?= $blog->image ?>" alt="<?= $blog->title ?>" class="img-fluid" /></div>
                            <div class="post-wrapper">
                                <div class="post-header mt-4">
                                    <h1 class="post-title h3"><?= $blog->title ?></h1>
                                    <ul class="post-meta list-unstyled d-flex list-inline">
                                        <li class="mr-4 font-small font-weight-bold"><?= $blog->update_at ?></li>
                                        <?php /*<li class="mr-4 font-small font-weight-bold">In <a href="#">Branding</a>, <a href="#">Design</a></li>
                                        <li class="mr-4 font-small font-weight-bold"><a href="#">3 Comments</a></li> */ ?>
                                    </ul>
                                </div>
                                <div class="post-content">
                                     <?= $blog->contenu ?>
                                </div>
                        </div>
                        <!-- Post end-->

                        <!-- Comments area-->
                       <?php /* <div class="comments-area mt-5">
                            <h5 class="comments-title">3 Comments</h5>
                            <div class="comment-list">
                                <!-- Comment-->
                                <div class="comment">
                                    <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="assets/img/clients/client-2.jpg" alt="comment" /></div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author"><a href="#">Jason Ford</a></div>
                                            <div class="comment-meta-date"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                                        </div>
                                        <div class="comment-reply"><a href="#">Reply</a></div>
                                    </div>
                                    <!-- Subcomment-->
                                    <div class="children">
                                        <div class="comment">
                                            <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="assets/img/clients/client-3.jpg" alt="comment" /></div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <div class="comment-meta-author"><a href="#">Harry Benson</a></div>
                                                    <div class="comment-meta-date"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                                </div>
                                                <div class="comment-content">
                                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella.</p>
                                                </div>
                                                <div class="comment-reply"><a href="#">Reply</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment-->
                                <div class="comment">
                                    <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="assets/img/clients/client-4.jpg" alt="comment" /></div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author"><a href="#">Henry Cain</a></div>
                                            <div class="comment-meta-date"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                                        </div>
                                        <div class="comment-reply"><a href="#">Reply</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h5 class="comment-reply-title">Leave a Reply</h5>
                                <p class="comment-notes">Your email address will not be published. Required fields are marked</p>
                                <form class="comment-form row">
                                    <div class="form-group col-md-4">
                                        <input class="form-control" type="text" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input class="form-control" type="url" placeholder="Website">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" rows="8" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="form-submit col-md-12">
                                        <button class="btn btn-secondary" type="submit">Post Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Comments area end-->
                    </div>
                    */
                    ?>
                </div>
            </div>
        </section>
        <!--blog section end-->


</div>