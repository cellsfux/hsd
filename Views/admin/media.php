<div class="main-panel">
        <div class="content-wrapper">
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ressouces</h4>
                  <p class="card-text">
                   Les photos que vous avez televerser
                   <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal-4" data-whatever="@mdo" style="position: absolute; right:10px; top:5px">Ajouter encore</button>
                  </p>
                  <div id="lightgalleryiiiii" class="row lightGallery">

                  <?php
                      foreach($data as $image){
                        ?>
                         <a id="maskjison-<?= $image->_id?>"  href="javescript:void(0)" title="<?= $image->created_at ?>" class="jison_conten image-tile">
                        <img src="<?= URLROOT ?>uploads/<?= $image->file_path ?>" style="width:250px; height:200px" alt="image small">
                
                    <div class="jison_hover">
                       <span class="material-icons"  onclick="delete_image(<?= $image->_id?>)">delete</span>
                    </div></a>


                        <?php
                      }
                  ?>
                    

                    <?php /*<a  href="javescript:void(0)" class="jison_conten image-tile">
                        <img src="<?= URLROOT ?>assets/admin/images/samples/300x300/1.jpg" alt="image small">
                
                    <div class="demo-gallery-poster">
                          <img src="<?= URLROOT ?>assets/admin/images/lightbox/play-button.png" alt="image">
                      </div>

                      <div class="jison_hover">jison over exemple</div>
                  </a>
                  */ ?>
              
                 
                    </div>
                </div>
              </div>
            </div>
          </div>
        
    


          <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalLabel">Ajouter des fichier images</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" onclick=" deleteform()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="<?= URLROOT ?>admin/addMedia" class="dropzone" id="my-awesome-dropzone"></form>
                        </div>
                        <div class="modal-footer">
                          
                          <button type="button" onclick="deleteform()" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
       