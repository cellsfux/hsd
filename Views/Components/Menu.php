<header class="header position-relative z-9">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-primary fixed-top headroom">
            <div class="container position-relative">
                <a class="navbar-brand mr-lg-3" href="<?= URLROOT ?>">
                    <img class="navbar-brand-dark" style="height: 40px;" src="<?= URLROOT ?>assets/hesed.png" alt="menuimage">
                    <img class="navbar-brand-light" style="height: 40px;" src="<?= URLROOT ?>assets/hesed.png" alt="menuimage">
                </a>
                <div class="navbar-collapse collapse" id="navbar-default-primary">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="#">
                                    <img style="height: 40px;" src="<?= URLROOT ?>assets/hesed.png" alt="menuimage">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <i class="fas fa-times"
                                 data-toggle="collapse" 
                                 role="button" data-target="#navbar-default-primary"
                                  aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover ml-auto">
                        <li class="nav-item ">
                            <a href="<?= URLROOT ?>" class="nav-link " >
                                <span class="nav-link-inner-text">Home</span>
                               
                            </a>
                         
                        </li>

                        <li class="nav-item dropdown">
                            <a href="<?= URLROOT ?>services" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text">services</span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="sub-menu dropdown-menu" id="services_comp">
                                <li><a class="dropdown-item" href="<?= URLROOT ?>services">Alls</a></li>
                            </ul>
                        </li>

                       
                        <li class="nav-item ">
                            <a href="<?= URLROOT ?>blog" class="nav-link " >
                                <span class="nav-link-inner-text">Blog</span>
                            </a>
                         
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT ?>main/about">About Us</a>
                        </li>
                       

                        <li class="<?= URLROOT ?>contacts"><a class="nav-link" href="<?= URLROOT ?>main/contact">Contact Us</a></li>
                    
                       
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar-default-primary" aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>