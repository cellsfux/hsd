    <!--footer section start-->
    <footer class="footer-wrap">
        <div class="footer footer-top section section-md bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <a class="footer-brand mr-lg-5 d-flex" href="index.html">
                            <img src="<?= URLROOT ?>assets/hesed.png" class="mr-3" alt="Footer logo">
                        </a>
                        <p class="my-4">Votre partenaire fiable pour vous aider à atteindre les objectis.</p>
                        <div class="btn-wrapper mt-4">
                            <a href="<?php if(isset($company->social_2)){ echo $company->social_2; } ?>" class="btn btn-icon-only btn-pill btn-twitter mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" >
                                <span aria-hidden="true" class="fab fa-twitter"></span>
                            </a>
                            <a href="<?php if( isset($company->social_1)){ echo $company->social_1; } ?>" class="btn btn-icon-only btn-pill btn-facebook mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" >
                                <span aria-hidden="true" class="fab fa-facebook-f"></span>
                            </a>
                            <a href="<?php if(isset($company->social_4) ){ echo $company->social_4; } ?>" class="btn btn-icon-only btn-pill btn-youtube mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" >
                                <span aria-hidden="true" class="fab fa-youtube"></span>
                            </a>
                            <a href="<?php if(isset($company->social) ){echo $company->social;} ?>" class="btn btn-icon-only btn-pill btn-instagram icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="">
                                <span aria-hidden="true" class="fab fa-instagram"></span>
                            </a>

                            <a href="<?php if(isset($company->social_3)){ echo $company->social_3;} ?>" class="btn btn-icon-only btn-pill btn-twitter  icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" >
                               <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="mb-4">Company</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="<?= URLROOT ?>about">About Us</a></li>
                            <li><a target="_blank" href="<?= URLROOT ?>services">Services</a></li>
                            <li><a target="_blank" href="<?= URLROOT ?>blog">Blog</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="mb-4">Resources</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="#">Aide</a></li>
                            <li><a target="_blank" href="#">Events</a></li>
                           
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <h5 class="mb-4">Support</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="#">Help</a></li>
                            <li><a target="_blank" href="#">Tech Support</a></li>
                            <li><a target="_blank" href="#">Contact Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer py-3 bg-primary text-white border-top border-variant-default">
            <div class="container">
                <div class="row">
                <div class="col p-3">
                <div class="d-flex text-center justify-content-center align-items-center">
                    <p class="copyright pb-0 mb-0">Copyrights © <script> document.write(new Date().getFullYear()) </script>. All rights reserved by
                        <a href="" target="_blank"><?= WEB_NAME ?></a>
                    </p>
                </div>
            </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer section end-->
    <!--scroll bottom to top button start-->


    <button onclick="w_contact()" class="scroll-top jison_bton_w" data-n=' <?php if(isset( $company->number_watsapp)){echo  $company->number_watsapp;} ?>' href="" style=" 
    outline:none;
     border:none;  position: fixed;
            z-index: 9999999999;
            background:#26A726;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffff;              
    right: 10px;
    bottom: 50%; ">
       <span style="font-size:30px" class="fa-brands fa-whatsapp"></span>
       </button>
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </button>