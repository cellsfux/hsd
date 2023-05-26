<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Send</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Received</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">Payments</a>
                    </li>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-plus"></i> send</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="modern-user-intro"><?= Saluer() ?> Jison,</h4>
                                   <h6 class="mdern-welcome-text">Welcome back</h6>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <div class="bg-opacity-primary mb-2 mb-lg-0">
                                      <i class="mdi mdi-credit-card"></i>
                                      <p>Transfer via card number</p>
                                      <div class="text-end">
                                        <i class="mdi mdi-arrow-right"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-3">
                                    <div class="bg-opacity-success mb-2 mb-lg-0">
                                      <i class="mdi mdi-home"></i>
                                      <p>Transfer to another bank</p>
                                      <div class="text-end">
                                        <i class="mdi mdi-arrow-right"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-3">
                                    <div class="bg-opacity-info mb-2 mb-lg-0">
                                      <i class="mdi mdi-account-check"></i>
                                      <p>Transfer to the same bank</p>
                                      <div class="text-end">
                                        <i class="mdi mdi-arrow-right"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-3">
                                    <div class="bg-opacity-danger mb-2 mb-lg-0">
                                      <i class="mdi mdi-cellphone"></i>
                                      <p>Transfer using UPI number</p>
                                      <div class="text-end">
                                        <i class="mdi mdi-arrow-right"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Revenue Growth</h4>
                                   <p class="text-small modern-color-999">Weekly report</p>
                                  </div>
                                  <div>
                                    <h4 class="revenue-growth-value">$2,000</h4>
                                    <h4 class="revenue-growth-percentage">+12.6%</h4>
                                  </div>
                                </div>
                                <div class="chartjs-wrapper mt-4 chart-height-modern">
                                  <canvas id="modernRevenueGrowth"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>
   