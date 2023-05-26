   <div class="main-panel">
        <form id="form-submit" data-url="<?= URLROOT ?>admin/UpdatadeCompany" class="content-wrapper">

          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier les informations de <?= WEB_NAME ?></h4>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Slogan</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->slogan ?>" maxlength="1024" name="slonga" id="defaultconfig" type="text" placeholder="Type Something..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Telephone whatsapp</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->number_watsapp ?>" maxlength="200" name="number_w" id="defaultconfig-2" type="text" placeholder="Type Something..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Email</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->email ?>" maxlength="150" name="email" id="defaultconfig-3" type="text" placeholder="Type Something..">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Adresse de <?= WEB_NAME ?></h4>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Pays</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->pays ?>" maxlength="255" name="pays" id="defaultconfig" type="text" placeholder="Type Something..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Ville</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->ville ?>" maxlength="100" name="ville" id="defaultconfig-2" type="text" placeholder="Type Something..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Adresse/ communune, avenue,...</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->adress ?>" maxlength="255" name="adress" id="defaultconfig-3" type="text" placeholder="Type Something..">
                    </div>
                  </div>

                 <div class="f-right">
                 <?= $data->maps_location ?> 
                 </div> 

                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Ajouter un carte</label>
                    </div>
                    <div class="col-lg-8">
                      <textarea id="maxlength-textarea" class="form-control" cols="10" rows="10"  maxlength="100000" name="maps" id="defaultconfig-3"  placeholder="Type Something..">
                        <?= $data->maps_location ?>  
                    </textarea>
                    </div>
              
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Socials media <?= WEB_NAME ?></h4>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Instagram</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->social?>" maxlength="255" name="social" id="defaultconfig" type="text" placeholder="Type Something..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Facebook</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->social_1 ?>" maxlength="200" name="social_1" id="defaultconfig-2" type="text" placeholder="Type Something..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Twiter</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->social_2 ?>" maxlength="200" name="social_2" id="defaultconfig-3" type="text" placeholder="Type Something..">
                    </div>
                  </div>
                

                <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Linkdin</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->social_3?>" maxlength="200" name="social_3" id="defaultconfig-3" type="text" placeholder="Type Something..">
                    </div>
                  </div>


                  
                <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Chaine Youtube</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?= $data->social_4?>" maxlength="200" name="social_4" id="defaultconfig-3" type="text" placeholder="Type Something..">
                    </div>
                  </div>

                  
               
                  </div>
                </div>
              </div>
            </div>
          

















            <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Descriptions</h4>
                  <textarea id='tinyMceExample' name="descriptions">
                     <?= $data->description ?>
                  </textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Terme de licence</h4>

                  <textarea id='tinyMceExample' name="terms">
                       <?= $data->terme_licence ?>
                  </textarea>

                 
                 
                </div>

                <div id="result"></div>

                 
              </div>
            </div>
          </div>



          <button id="btn-save"  data-before='Please wait...' data-text="Enregistrer les modifications" type="submit" class="btn btn-success">Enregistrer les modifications</button>
        </form>
          

   </div>











   





        </div>
        