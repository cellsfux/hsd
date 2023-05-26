
<div class="main-panel">
    <div class="content-wrapper">


        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Créer votre article</h4>
                  <form class="cmxform" id="form-submit" data-url="<?= URLROOT ?>admin/AddArticle" method="post" action="#">
                    <fieldset>
                      <div class="form-group">
                        <label for="cname">Titre (le titre de l'article est requis et dois avoir au minimun 2 caractaires)</label>
                        <input id="cname" name='title' class="form-control"  minlength="2" placeholder="Le titre de votre article" type="text" required>
                      </div>
                     
                      <div class="form-group">
                        <label for="curl">URL (optional)</label>
                        <input id="curl"    class="form-control" type="url" name="url">
                      </div>
                     
                      <div class="form-group">
                        <span class="btn btn-success" onclick="findimage()"  
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter une image </span>
      <div style="width:100%; display:flex; padding-top:5px; align-items:center; justify-content:center">
           <img  id="image_preview"  style="width: 70%;"  >
      </div>
                        

                        <input id="image_input" hidden required  minlength="10"   class="form-control" type="text" name="image">
                      </div>

                      <div class="form-group">
                      <h4 class="card-title">Contenus de l'articles</h4>
                          <textarea name="contenu" id='tinyMceExample'>
                           Ecrivez votre contenu ici....
                       </textarea>


                      </div>

                      <div id="result"></div>
                      <button class="btn btn-primary" data-text="Soumettre" data-before="Please wait..." type="submit" id="btn-save" >Soumettre</button>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
         </div>
          
        

        
        </div>
</div>
      


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Choisir un fichier</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <div id="lightgalleryiiiii" class="row lightGallery"></div>
                        </div>
                      
                      </div>
                    </div>
                  </div>

